<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
//        $newest =Product::orderBy('created_at','desc')->take(3)->get();
//        $cheaps =Product::orderBy('price','asc')->take(3)->get();
//        $exs =Product::orderBy('price','desc')->take(3)->get();
//        return view("home",['newest'=>$newest,'cheaps'=>$cheaps,'exs'=>$exs]);
        return view("home");
    }

    public function product(){
//        $product=Product::find(1);//tra ve 1 object product theo id
//        $category_product =Product::where("category_id",$product->category_id)->where('id'."!=",$product->id)->take(10)->get();
//        $brand_product =Product::where("brand_id",$product->brand_id)->where('id'."!=",$product->id)->take(10)->get();
//        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
        return view('product_view');
    }
//    public function news(){
//        return view("news");
//    }
//    public function about(){
//        return view("about");
//    }
//    public function delivery(){
//        return view("delivery");
//    }
    public function contact(){
        return view("contact");
    }
    public function checkout(){
        return view("checkout");
    }
//
//
//    public function listing($id){
//        $product=Product::where("category_id",$id)->take(20)->orderby('create_at','desc')->get();//loc theo category
//        return view("product_view",['product'=>$product]);
//    }
    public function listing(){

        return view("product");
    }
    public function shopping(){

        return view("cart");
    }
//    public function home1(){
//        $products= Product::all();
//        $products= Product::take(10)->orderBy('product_name','asc')->get();
//        return view("product_view");
//    }
//    public function shopping($id){
//      $product=Product::find($id);
//        $product->update([
//        "quantity"=>$product->quantity-1
//    ]);
//    return redirect()->to("san-pham/{$product->id}");
//    }
}


