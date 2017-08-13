<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";

    public function chitietloai(){
    	return $this->belongsTo('App\ChiTietLoai','id_chitietloai','id');
    }

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
    
}
