<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $table = "type_products";

    public function chitietloai(){
    	return $this->hasMany('App\ChiTietLoai','id_type','id');
    }

    public function product(){
    	return $this->hasManyThrough('App\Product','App\ChiTietLoai','id_type','id_chitietloai','id');
    }
}
