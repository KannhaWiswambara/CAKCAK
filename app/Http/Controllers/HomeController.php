<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('frontpage.landingpage', ['title' => "landing Page"]);
    }
    function cart(){
        return view('cart.cart', ['title' => "Carts"]);
    }
}
