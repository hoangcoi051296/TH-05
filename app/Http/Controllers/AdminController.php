<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function user(){
        $users=User::all();
        return view('admin.user.index',['users'=>$users]);
    }
    public function userEdit($id){
        $users = User::find($id);
        return view ("admin.user.edit",['users'=>$users]);
    }
    public function userUpdate($id,Request $request){
        $users = User::find($id);
        $request->validate([
            "role"=> "required|boolean"  // validation laravel
        ]);
        try {
            $users->update([
                "role"=>$request->get('role')
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/user");
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
        $brand=Brand::all();
        $categories=Category::all();
        return view("admin.product.create",['categories'=>$categories],['brand'=>$brand]);
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


    public function categoryEdit($id){
        $category = Category::find($id);
        return view ("admin.category.edit",['category'=>$category]);
    }
    public function categoryUpdate($id,Request $request){
        $category = Category::find($id);
        $request->validate([
            "category_name"=> "required|string|unique:category,category_name,".$id  // validation laravel
        ]);
        try {
            $category->update([
                "category_name"=>$request->get('category_name')
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function categoryDestroy($id){
        $category = Category::find($id);

        try {
           $category->delete();//xoa cung
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function brandEdit($id){
        $brand = Brand::find($id);
        return view ("admin.brand.edit",['brand'=>$brand]);
    }
    public function brandUpdate($id,Request $request){
        $brand = Brand::find($id);
        $request->validate([
            "brand_name"=> "required|string|unique:brand,brand_name,".$id  // validation laravel
        ]);
        try {
            $brand->update([
                "brand_name"=>$request->get('brand_name')
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

    public function brandDestroy($id){
        $brand = Brand::find($id);

        try {
            $brand->delete();//xoa cung
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

}
