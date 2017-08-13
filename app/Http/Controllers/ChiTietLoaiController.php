<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietLoai;
use App\ProductType;

class ChiTietLoaiController extends Controller
{
    //
    public function getDanhSach(){
    	$chitietloai = ChiTietLoai::all();
    	return view('admin/chitietloai/danhsach',compact('chitietloai'));
    }
    public function getThem(){
        $them = ProductType::all();
    	return view('admin/chitietloai/them',compact('them'));
    }

    public function postThem(Request $req){
    	$them = new ChiTietLoai;
    	$them->id_type = $req->id_type;
    	$them->name = $req->name;
    	$them->save();

    	return redirect()->back()->with('thongbao','Thêm thành công');
    }

    public function getSua($id){
    	$sua = ChiTietLoai::find($id);
        $type = ProductType::all();
    	return view('admin/chitietloai/sua',compact('sua','type'));
    }
    public function postSua(Request $req,$id){
    	$sua = ChiTietLoai::find($id);
    	$sua->id_type = $req->id_type;
    	$sua->name = $req->name;
    	$sua->save();
    	return redirect()->back()->with('thongbao','Sửa thành công');
    }

    public function getXoa($id){
    	$xoa= ChiTietLoai::find($id);
    	$xoa->delete();
    	return redirect()->back()->with('thongbao','Xoá thành công');
    }
}
