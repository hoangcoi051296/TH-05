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
Route::get("/danh-sach-lop-hoc","WebController@students");
Route::get("/","WebController@home");
// Route::METHOD(path_string,Controller@function_in_controller);
Route::get("/san-pham","WebController@product");
Route::get("/danh-muc","WebController@listing");


Route::get("/trang-chu","WebController@home1");
