<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanQuyen extends Model
{
    protected $table = "phanquyen";

    public function users(){
    	return $this->hasMany('App\User','id_phanquyen','id');
    }
}
