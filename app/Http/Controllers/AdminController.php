<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function category(){
        $categories=Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }
    public function categoryCreate(){
        return view("admin.category.create");
    }

    public function categoryStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "category_name"=> "required|string|unique:category"  // validation laravel
        ]);
        try {
            Category::create([
                "category_name"=> $request->get("category_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function brand(){
        $brand=Brand::all();
        return view('admin.brand.index',['brand'=>$brand]);
    }
    public function brandCreate(){
        return view("admin.brand.create");
    }

    public function brandStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "brand_name"=> "required|string|unique:brand"  // validation laravel
        ]);
        try {
            Brand::create([
                "brand_name"=> $request->get("brand_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

    public function product(){
        $products=Product::all();
        return view('admin.product.index',['products'=>$products]);
    }
    public function productCreate(){
        return view("admin.product.create");
    }
    public function productStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "product_name"=> "required|string|unique:product" , // validation laravel
            "product_desc"=> "required|string",
            "thumnail"=> "required|string|unique:product",
            "gallery"=> "required|string|unique:product",
            "category_id"=> "required|string",
            "brand_id"=> "required|string",
            "price"=> "required",
            "quantity"=> "required"
        ]);
        try {
            Product::create([
                "product_name"=> $request->get("product_name"),
                 "product_desc"=> $request->get("product_desc"),
                 "thumnail"=> $request->get("thumnail"),
                 "gallery"=> $request->get("gallery"),
                "category_id"=> $request->get("category_id"),
                "brand_id"=> $request->get("brand_id"),
                 "quantity"=> $request->get("quantity"),
                 "price"=> $request->get("price"),
            ]);
//            Category::create([
//                "category_name"=> $request->get("category_name")
//            ]);
//            Brand::create([
//                "brand_name"=> $request->get("brand_name")
//            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }
}
