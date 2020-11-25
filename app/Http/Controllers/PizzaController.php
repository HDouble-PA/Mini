<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index(){
        return view("index");
    }
    function pizzas() {
        // array format
        // $pizzas=[
        //     ["id"=>1,"username"=>"Kyaw Kyaw","pizza_name"=>"Chicken Pizza","toppings"=>"salad","sauce"=>"tomato","price"=>"9.88$"],
        //     ["id"=>2,"username"=>"Hsu Hsu","pizza_name"=>"Chicken Pizza","toppings"=>"Extra Cheese","sauce"=>"tomato","price"=>"8.79$"],
        //     ["id"=>3,"username"=>"Nay Nay","pizza_name"=>"Chicken Pizza","toppings"=>"Cheesy","sauce"=>"tomato","price"=>"7.88$"],
        //     ["id"=>4,"username"=>"Tun Tun","pizza_name"=>"BBQ Chicken Pizza","toppings"=>"Cheesy","sauce"=>"tomato","price"=>"10$"],
            
        // ];
        // send data to blade file back
        // object format
        $pizzas = Pizza::all();
        // dd($pizzas);
        return view('pizzas',['pizzas'=>$pizzas]);
    }
    function insert(Request $req){
       $validation = $req->validate([
        "username" => "required",
        "pizza_name" => "required",
        "toppings" => "required",
        "sauce" => "required",
        "price" => "required",
       ]);
       if($validation){

        // insert data into database
           $pizza = new Pizza();
           $pizza->username = $req->username;
           $pizza->pizza_name = $req->pizza_name;
           $pizza->toppings = $req->toppings;
           $pizza->sauce= $req->sauce;
           $pizza->price= $req->price;

           $pizza->save();
           return back()->with("success","Dear Customer,Thank you so much for your Order!");
       }
       else{
           return back()->withErrors($validation);
       }
    }

    // delete data 
    function delete($id){
       // return $id;
    //    find data by id
    $delete_pizza_data = Pizza::find($id);
    // dd($delete_pizza_data);

    // delete this data
    $delete_pizza_data->delete();
    return back()->with('delete',"$delete_pizza_data->username's Order is deleted successfully!");

    }
    // edit form blade method
    function edit($id){
        $pizza =Pizza::find($id);
        return view("edit",["pizza"=>$pizza]);
    }

    //update
    function update($id,Request $req){
        $pizza=Pizza::find($id);
        $pizza->username=$req->username;
        $pizza->pizza_name=$req->pizza_name;
        $pizza->toppings=$req->toppings;
        $pizza->sauce=$req->sauce;
        $pizza->price=$req->price;

        $pizza->update();
        return redirect()->route('/pizzas');
    }
}
