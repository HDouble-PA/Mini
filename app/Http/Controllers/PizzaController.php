<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index(){
        return view("index");
    }
    function pizzas () {
        return view('pizzas');
    }
}
