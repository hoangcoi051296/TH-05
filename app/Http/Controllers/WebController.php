<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function students(){
        return view("student_listing");
    }
    public function home(){
        return view("home");
    }

    public function product(){
        return view('product_view');
    }

    public function listing(){
        return view("listing");
    }
    public function home1(){
        return view("Layout1");
    }

}
