<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route for admin
Route :: prefix("admin")->middleware("check_admin")->group(function (){
    include_once ("admin.php");
});
Route::get('/', function () {
    return view('welcome');
});

//Route:: Method(Path_string,Handler_Function);
//Method : post  get  put delete....CRUD

Route::get('/xin-chao',function (){
    echo "Hello everybody";
});
/*
 * Luu y : Chay URL tren trinh duyet-> methot GET
 * */
Route::get("/","WebController@home");
// Route::METHOD(path_string,Controller@function_in_controller);
Route::get("/danh-muc/{id}","WebController@listing");
Route::get("/san-pham/{id}","WebController@product");
Route::get("/contact","WebController@contact");
Route::get("/shopping/{id}","WebController@shopping")->middleware("auth");
Route::get("/cart","WebController@cart")->middleware("auth");
Route::get("/clear-cart","WebController@clearCart")->middleware("auth");
Route::get("/check-out","WebController@checkout")->middleware("auth");
Route::post("/check-out","WebController@placeOrder")->middleware("auth");
Route::get("checkout-success",'WebController@checkoutSuccess')->middleware("auth");
Route::get("search",'Webcontroller@getSearch');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout',function (){
   \Illuminate\Support\Facades\Auth::logout();
   session()->flush();
   return redirect()->to("/login");
});
