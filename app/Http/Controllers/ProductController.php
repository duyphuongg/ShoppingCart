<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ChiTietLoai;

class ProductController extends Controller
{
    public function getDanhSach(){
    	$product = Product::all();
    	return view('admin.product.danhsach',compact('product'));
    }
    public function getThem(){
        $type = ChiTietLoai::all();
    	return view('admin.product.them',compact('type'));
    }
    public function postThem(Request $req){
    	$them = new Product;
    	$them->name=$req->name;
    	$them->id_chitietloai=$req->id_chitietloai;
    	$them->description=$req->description;
    	$them->unit_price=$req->unit_price;
    	$them->promotion_price=$req->promotion_price;
        $them->soluong=$req->soluong;

        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("source/image/product".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move("source/image/product",$image);
            $them->image= $image;
        }
        else
        {
            $them->image ="";
        }

    	$them->save();
    	return redirect()->back()->with('thongbao','Thêm sản phẩm thành công');

    }

    public function getSua($id){
        $sua=Product::find($id);
        $type = ChiTietLoai::all();
        return view('admin.product.sua',compact('sua','type'));
    }
    public function postSua(Request $req,$id){
        $sua=Product::find($id);
        $sua->name=$req->name;
        $sua->id_chitietloai=$req->id_chitietloai;
        $sua->unit_price=$req->unit_price;
        $sua->promotion_price=$req->promotion_price;
        $sua->description=$req->description;
        $sua->soluong=$req->soluong;

        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("source/image/product".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move("source/image/product",$image);
            $sua->image= $image;
        }
        else
        {
            $sua->image ="";
        }
        $sua->save();

        return redirect()->back()->with('thongbao','Sửa sản phẩm thành công');
    }
    public function getXoa($id){
        $xoa = Product::find($id);
        $xoa->delete();
        return redirect()->back()->with('thongbao','Xoá sản phẩm thành công');

    }
}
