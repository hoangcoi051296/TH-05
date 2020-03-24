<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = ['brand_name'];
    public function Product(){
        return $this->hasOne("\App\Product");//neu quan he 1-n thi se lay sp dau tien
    }
    public function Products(){
        return $this->hasMany("\App\Product");//id category_id
    }
}
