<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Auth;
use App\ChiTietLoai;



class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	$loaisp = ProductType::all();
    	return view('page.trangchu',compact('slide','loaisp'));
    }
   
    public function getChiTietLoai($type){
        $sp_theoloai = Product::where('id_chitietloai',$type)->get();
        $loaisp = ChiTietLoai::where('id',$type)->first();
        return view('page.chitietloai',compact('sp_theoloai','loaisp'));
    }
    public function getChiTietSanPham(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $sp_tuongtu = Product::where('id_chitietloai',$sanpham->id_chitietloai)->paginate(3);
    	return view('page.chitietsanpham',compact('sanpham','sp_tuongtu'));
    }
    public function getLienHe(){
    	return view('page.lienhe');
    }
    public function getAddToCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDeleteCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items)>0) {
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function getCheckOut(){
        $hoadon = Bill::all()->first();
        return view('page.dathang',compact('hoadon'));
    }

    public function postCheckOut(Request $req){
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment;
        $bill->note = $req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

    public function getSearch(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')
        ->orWhere('unit_price',$req->key)->get();
        return view('page.search',compact('product'));
    }
}