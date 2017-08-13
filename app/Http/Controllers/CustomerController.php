<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getDanhSach(){
    	$customer = Customer::all();
    	return view('admin.customer.danhsach',compact('customer'));
    }
}
