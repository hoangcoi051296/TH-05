<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view("home");
    }

    public function product(){
        return view('product');
    }

    public function listing(){
        return view("product_view");
    }

}
