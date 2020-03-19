<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $newest =Product::orderBy('created_at','desc')->take(4)->get();
        $cheaps =Product::orderBy('price','asc')->take(4)->get();
        $exs =Product::orderBy('price','desc')->take(4)->get();
        return view("home",['newest'=>$newest,'cheaps'=>$cheaps,'exs'=>$exs]);
    }

    public function product($id){
        $product=Product::find($id);//tra ve 1 object product theo id
        $category_product =Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(10)->get();
        $brand_product =Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
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
    public function listing($id){
        $product=Product::where("category_id",$id)->take(8)->orderby('created_at','asc')->get();//loc theo category
        return view("listing",['products'=>$product]);
    }
    //Gio hang
//    public function shopping($id,Request $request){
//        $product = Product::find($id);
//        $cart = $request->session()->get("cart");
//        if($cart == null){
//            $cart = [];
//        }
//        foreach($cart as $p){
//            if($p->id == $product->id){
//                $p->cart_qty = $p->cart_qty+1;
////                $p->cart_total = $p->price* $p->cart_qty;
//                session(["cart"=>$cart]);
//                return redirect()->to("/cart");
//            }
//        }
//        $product->cart_qty = 1;
////        $product->cart_total =$product->price* $p->cart_qty;
//        $cart[] = $product;
//        session(["cart"=>$cart]);
//        return redirect()->to("/cart");
//
//    }

    public function cart(Request $request){
        $cart = $request->session()->get("cart");
        if($cart == null){
            $cart = [];
        }
        return view("cart",["cart"=>$cart]);

    }
    public function shopping($id, Request $request){
      $product=Product::find($id);
      $cart =$request->session()->get("cart");
        $cart =$request->session()->get("cart");
        if($cart==null){
            $cart=[];
        }
        foreach ($cart as $p){
            if($p->id == $product->id){
                $p->cart_qty =$p->cart_qty+1;
                session(["cart"=>$cart]);
                return redirect()->to("/cart");
            }
        }
        $product->cart_qty=1;
        $cart[]=$product;
        session(["cart"=>$cart]);
    return redirect()->to("/cart");
    }
    public function filter($c_id,$b_id){
        $products = Product::where('category_id',$c_id)->where('brand_id',$b_id)->get();
    }
    public function clearCart(Request $request){
        $request->session()->forget("cart");
//        $request->session()->flush();//Xoa toan bo phien lam viec
        return redirect()->to("/");
    }
}


