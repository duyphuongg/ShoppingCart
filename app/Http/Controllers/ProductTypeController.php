<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class ProductTypeController extends Controller
{
    public function getDanhSach(){
    	$type=ProductType::all();
    	return view('admin.product_type.danhsach',compact('type'));
    }
    public function getThem(){
    	return view('admin.product_type.them');
    }
    public function postThem(Request $req){
    	$them = new ProductType;
    	$them->name=$req->name;
    	$them->save();
    	return redirect()->back()->with('thongbao','Thêm loại sản phẩm thành công');
    }
    public function getSua($id){
    	$sua=ProductType::find($id);
    	return view('admin.product_type.sua',compact('sua'));
    }
    public function postSua(Request $req,$id){
    	$sua=ProductType::find($id);
    	$sua->name=$req->name;
    	$sua->save();
    	return redirect()->back()->with('thongbao','Thêm loại sản phẩm thành công');
    }

    public function getXoa($id){
    	$xoa = ProductType::find($id);
    	$xoa->delete();
    	return redirect()->back()->with('thongbao','Xoá loại sản phẩm thành công');

    }


}
