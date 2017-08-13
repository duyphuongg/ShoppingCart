<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BillDetail;

class BillDetailController extends Controller
{
    public function getDanhSach(){
    	$billdetail = BillDetail::all();
    	return view('admin.billdetail.danhsach',compact('billdetail'));
    }
}
