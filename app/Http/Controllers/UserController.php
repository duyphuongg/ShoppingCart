<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PhanQuyen;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Bill;


class UserController extends Controller
{
    public function getDanhSach(){
        $ad= Auth::user();
        if ($ad->id_phanquyen == 1) {
            $user = User::all();
            return view('admin.users.danhsach',compact('user'));
        }
        else
            return redirect()->back()->with('err','Bạn ko đủ quyền truy cập');
    }

    public function getThem(){
        $ad= Auth::user();
        if ($ad->id_phanquyen == 1) {
            return view('admin.users.them');
        }
        else
            return redirect()->back()->with('err','Bạn ko đủ quyền truy cập');
    	
    }
    public function postThem(Request $req){
    	$them = new User;
    	$them->name = $req->name;
    	$them->password =Hash::make($req->password);
    	$them->id_phanquyen = $req->quyen;
    	$them->save();

    	return redirect()->back()->with('thongbao','Thêm người dùng thành công');
    }

    public function getSua($id){
        $sua = User::find($id);
        return view('admin.users.sua',compact('sua'));
    }
    public function postSua(Request $req,$id){
        $sua = User::find($id);
        $sua->name = $req->name;
        $sua->password =Hash::make($req->password);
        $sua->id_phanquyen = $req->quyen;
        $sua->save();

        return redirect()->back()->with('thongbao','Sửa người dùng thành công');
    }
    public function getXoa($id){
        $xoa = User::find($id);
        $xoa->delete();
        return redirect()->back()->with('thongbao','Xoá người dùng thành công');
    }

    public function getDangNhap(){
        return view('admin.login');
   }
   public function postDangNhap(Request $req){
        $this->validate($req,
        [
            'name'=>'required',
            'password'=>'required|min:3|max:30'
        ],
        [ 
            'name.required'=>'Bạn chưa nhập tên đăng nhập',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải ít nhất 3 kí tự',
            'password.max'=>'Mật khẩu có tối đa 30 kí tự'
        ]);
        if (Auth::attempt(['name'=>$req->name,'password'=>$req->password])) 
        {
            return redirect('admin/trangchu');
        }
        else
        {
            return redirect()->back()->with('thongbao','Đăng nhập thất bại');
        }

   }  

   public function getDangXuat(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }  

    public function getTrangChu(){
        return view('admin.trangchu');
    }

    

}
