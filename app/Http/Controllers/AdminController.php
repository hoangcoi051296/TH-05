<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Order;
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
            "name"=>"required|string",
            "email"=>"required|string|unique:users,name,".$id,
            "role"=> "required|boolean"  // validation laravel
        ]);
        try {
            $users->update([
                "name"=>$request->get('name'),
                "email"=>$request->get('email'),
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
            $image = null;
            $ext_allow = ["png","jpg","jpeg","gif","svg"];
            if($request->hasFile("image")){
                // neu nhieu file
                $file = $request->file("image");// array neu gui len dang multifile
                $file_name = time()."-".$file->getClientOriginalName(); // lay ten file
                $ext = $file->getClientOriginalExtension(); // lay duoi file
                if(in_array($ext,$ext_allow)){
                    $file->move("upload/category",$file_name);
                    $image = "upload/category/".$file_name;
                }
            }
            Category::create([
                "category_name"=> $request->get("category_name"),
                'image'=>$image
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
    public function categoryEdit($id){
        $category = Category::find($id);
//        dd($category);
        return view ("admin.category.edit",['category'=>$category]);
    }
    public function categoryUpdate($id,Request $request){
        $category = Category::find($id);
        $request->validate([
            "category_name"=> "required|string|unique:category,category_name,".$id  // validation laravel

        ]);
        try {
            $image = null;
            $ext_allow = ["png","jpg","jpeg","gif","svg"];
            if($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."_".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if(in_array($ext,$ext_allow)){
                    $file->move("upload/category",$file_name);
                    $image = "upload/category/".$file_name;
                }
            }
            $category->update([
                "category_name"=> $request->get('category_name'),
                'image'=>$image
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

    public function product(){
        $products=Product::paginate(10);
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
    public function productUpdate($id,Request $request){
        $product = Product::find($id);
        $request->validate([
            "product_name"=> "required|string|unique:product,product_name,".$id , // validation laravel
            "product_desc"=> "required|string",
            "thumnail"=> "required|string|unique:product,thumnail,".$id,
            "gallery"=> "required|string|unique:product,gallery,".$id,
            "category_id"=> "required|string",
            "brand_id"=> "required|string",
            "price"=> "required",
            "quantity"=> "required"
        ]);
        try {
            $product->update([
                "product_name"=> $request->get("product_name"),
                "product_desc"=> $request->get("product_desc"),
                "thumnail"=> $request->get("thumnail"),
                "gallery"=> $request->get("gallery"),
                "category_id"=> $request->get("category_id"),
                "brand_id"=> $request->get("brand_id"),
                "quantity"=> $request->get("quantity"),
                "price"=> $request->get("price"),
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }
    public function productEdit($id){
        $brand=Brand::all();
        $categories=Category::all();
        $product = Product::find($id);
        return view ("admin.product.edit",['product'=>$product,'categories'=>$categories],['brand'=>$brand]);
    }
    public function productDestroy($id){
        $product = Product::find($id);

        try {
            $product->delete();//xoa cung
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }


    public function order(){
        $order=Order::paginate(10);
        return view('admin.order.index',['order'=>$order]);
    }



    //Cart

}
