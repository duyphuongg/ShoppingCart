<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietLoai extends Model
{
    //
    protected $table = "chitietloai";

    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id');
    }

    public function product(){
    	return $this->hasMany('App\Product','id_chitietloai','id');
    }
    public $timestamps = false;
}
