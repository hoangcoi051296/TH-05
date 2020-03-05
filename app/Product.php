<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable=['product_name','product_desc','thumnail','gallery','price','quantity' ,'category_id','brand_id'];
}
