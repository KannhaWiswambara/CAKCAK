<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Comunity;
use App\Models\Rate;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function index(){
        $title='Package';
        // $packages=[(object)[
        //     'package_code'=>'Test',
        //     'package_name'=>'Test2',
        //     'package_desc'=>'test3'
        // ]
        // ];
        $packages=Packages::all();
        return view('frontpage.landingpage', compact('title', 'packages'));
    }
    public function cart(Request $request){
        $title='Cart';
        $value = $request->value;
        $package=Packages::all();
        //$price = $value * $rates;
        return view('cart.cart', compact('title', 'package'));
        
    }
    function signin(){
        return view('signin.signin', ['title' => "Sign In"]);
    }
    function signup(){
        return view('signup.signup', ['title' => "Sign up"]);
    }
    function home(){
        return view('frontpage.home', ['title' => "Home Page"]);
    }
    function homepage(){
        return view('frontpage.homepage', ['title' => "Home Page"]);
    }
    public function store(Request $request){
        DB::table()->insert(user);
        return view('cart.checkout',['title'=>"checkout"]);

    }
   
}

