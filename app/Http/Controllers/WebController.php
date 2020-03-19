<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
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
        $brand = Brand::find($product->brand_id);
        $category_product =Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(10)->get();
        $brand_product =Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product,'brand'=>$brand]);
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
        $category = Category::find($id);
        $so_luong_sp = $category->Products()->count(); // ra so luong san pham
        // $category->Products ;// Lay tat ca product cua category nay
        // neu muon lay 1 so luong nhat dinh 10 san pham
        // $category->Products()->orderBy('price','desc')->take(10)->get();
        return view("listing",['products'=>$product,'category'=>$category]);
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
        $cart_total = 0 ;
        foreach ($cart as $p){
            $cart_total += ($p->price*$p->cart_qty);
        }
        return view("cart",["cart"=>$cart,'cart_total'=>$cart_total]);

    }
    public function shopping($id, Request $request){
      $product=Product::find($id);
        $cart =$request->session()->get("cart");

        if($cart==null){
            $cart=[];
        }
        $cart_total = $request->session()->get("cart_total");
        if($cart_total == null) $cart_total =0;
        foreach ($cart as $p){
            if($p->id == $product->id){
                $p->cart_qty =$p->cart_qty+1;
                $cart_total += $p->price;
                session(["cart"=>$cart]);
                return redirect()->to("/cart");
            }
        }
        $product->cart_qty=1;
        $cart[]=$product;
        $cart_total += $product->price;
        session(["cart"=>$cart]);
        session(["cart_total"=>$cart_total]);
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


