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
        return view('pizzas');
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
}
