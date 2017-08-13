<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;

class BillController extends Controller
{
    public function getDanhSach(){
    	$bill = Bill::all();
    	return view('admin.bill.danhsach',compact('bill'));
    }

    public function getThongKe(Request $req){
        $bill = Bill::where('date_order','like','%'.$req->key.'%')->get();
        return view('admin.thongke',compact('bill'));
    }
}
