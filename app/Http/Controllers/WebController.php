<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Mail\OrderCancel;
use App\Mail\OrderCreated;
use App\Mail\Repurchase;
use App\Order;
use App\Product;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;

class WebController extends Controller
{
    public function home(){
//        if(is_admin()){
//            die("admin day");
//        }
        $newest =Product::orderBy('created_at','desc')->take(4)->get();
        $cheaps =Product::orderBy('price','asc')->take(4)->get();
        $exs =Product::orderBy('price','desc')->take(4)->get();
        return view("home",['newest'=>$newest,'cheaps'=>$cheaps,'exs'=>$exs]);
    }

    public function product($id){
        $product=Product::find($id);//tra ve 1 object product theo id
        $brand = Brand::find($product->brand_id);
        $img =explode(",",$product->gallery);
        $category_product =Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(10)->get();
        $brand_product =Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product,'brand'=>$brand,'img'=>$img]);
    }
    public function contact(){
        return view("contact");
    }
    public function listingCategory($id){
        //loc theo category
        $category = Category::find($id);
        $product=$category->Products()->paginate(8);
//        $product=Product:: paginate(8);
        $so_luong_sp = $category->Products()->count(); // ra so luong san pham
        // $category->Products ;// Lay tat ca product cua category nay
        // neu muon lay 1 so luong nhat dinh 10 san pham
        // $category->Products()->orderBy('price','desc')->take(10)->get();
        return view("listingCategory",['products'=>$product,'category'=>$category]);
    }
    public function listingBrand($id){
        //loc theo category
        $brand = Brand::find($id);
        $product=$brand->Products()->paginate(8);
        return view("listingBrand",['products'=>$product,'brand'=>$brand]);
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

    public function checkout(Request $request){
        if(!$request->session()->has("cart")){
            return redirect()->to("/");
        }
        return view("checkout");
    }
    public function placeOrder(Request $request){
        $request->validate([
            'customer_name'=> 'required | string',
            'address' => 'required',
            'payment_method'=> 'required',
            'telephone'=> 'required',
        ]);

        $cart = $request->session()->get('cart');
        $grand_total = 0;
        foreach ($cart as $p){
            $grand_total += ($p->price * $p->cart_qty);
        }
        $order = Order::create([
            'user_id'=> Auth::id(),
            'customer_name'=> $request->get("customer_name"),
            'shipping_address'=> $request->get("address"),
            'telephone'=> $request->get("telephone"),
            'grand_total'=> $grand_total,
            'payment_method'=> $request->get("payment_method"),
            "status"=> Order::STATUS_PENDING
        ]);
        foreach ($cart as $p){
            DB::table("orders_products")->insert([
                'orders_id'=> $order->id,
                'product_id'=>$p->id,
                'qty'=>$p->cart_qty,
                'price'=>$p->price
            ]);
        }
        session()->forget('cart');
        Mail::to(Auth::user()->email)->send(new OrderCreated($order));
        return redirect()->to("/checkout-success");
    }
    public function getSearch(Request $request){
        $product = Product::where('product_name','like','%'.$request->get("key").'%')->get();
        return view("search",['products'=>$product]);
    }

    public function getListOrder(){

        $listOrder =Order::where ("user_id",Auth::id())->get();
        return view('listOrder',['listOrder'=>$listOrder]);
    }
    public function getOrderPurchased($id){
        $order = Order::find($id);
         $product=$order->Products;
        return view('viewOrder',['product'=>$product,'order'=>$order]);
    }

    public function repurchase($id,Request $request){
        $order = Order::find($id);
        $product=$order->Products;

        $grand_total = 0;
        foreach ($product as $p) {
            $grand_total+=$p->pivot->qty*$p->price;

        }
            $o = Order::create([
                'user_id'=> Auth::id(),
                'customer_name'=> $order->customer_name,
                'shipping_address'=>$order->shipping_address,
                'telephone'=> $order->telephone,
                'grand_total'=> $grand_total,
                'payment_method'=>$order->payment_method,
                "status"=> Order::STATUS_PENDING
            ]);
        foreach ($product as $p){
            DB::table("orders_products")->insert([
                'orders_id'=> $o->id,
                'product_id'=>$p->id,
                'qty'=>$p->pivot->qty,
                'price'=>$p->pivot->price
            ]);
        }
        Mail::to(Auth::user()->email)->send(new Repurchase($o));
        return redirect()->to("/checkout-success");
    }
    public function checkoutSuccess(){
        return view('checkoutSuccess');
    }
    public function orderPurchasedDestroy($id){
        $order=Order::find($id);
        try {
            $order->delete();//xoa cung
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        Mail::to(Auth::user()->email)->send(new OrderCancel());
        return redirect()->to("/");
    }


    public function listStudent(){
        $student =Student::all();
        return view("student.index",['student'=>$student]);
    }
    public function studentCreate(){
        return view("student.create");
    }
    public function studentAdd(Request $request){
        $request->validate([
            "name"=> "required|string" ,
            "age"=>"required|string" ,
            "address"=>"required",
            "telephone"=>"required"
        ]);
        try {
            Student::create([
                "name"=> $request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("/student");
    }
}




