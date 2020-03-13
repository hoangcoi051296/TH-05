<?php
Route ::get('main',"AdminController@admin");

Route ::get('product',"AdminController@product");
Route::get('product/create',"AdminController@productCreate");
Route::post('product/store',"AdminController@productStore");

Route ::get('category',"AdminController@category");
Route::get('category/create',"AdminController@categoryCreate");
Route::post('category/store',"AdminController@categoryStore");

Route ::get('brand',"AdminController@brand");
Route::get('brand/create',"AdminController@brandCreate");
Route::post('brand/store',"AdminController@brandStore");
