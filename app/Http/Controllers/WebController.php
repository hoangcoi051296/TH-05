<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view("home");
    }

    public function product(){
        return view('product');
    }
    public function news(){
        return view("news");
    }
    public function about(){
        return view("about");
    }
    public function delivery(){
        return view("delivery");
    }
    public function contact(){
        return view("contact");
    }


    public function listing(){
        return view("product_view");
    }
    public function home1(){
//        $products= Product::all();
        $products= Product::take(10)->orderBy('product_name','asc')->get();
        return view("product_view");
    }
}
