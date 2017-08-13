<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index','PageController@getIndex'
)->name('trang-chu');

Route::get('loaisanpham/{type}','PageController@getLoaiSP')->name('loaisp');

Route::get('chitietloai/{type}','PageController@getChiTietLoai')->name('chitietloai');

Route::get('chitietsanpham/{id}','PageController@getChiTietSanPham')->name('chitietsanpham');

Route::get('lienhe','PageController@getLienHe')->name('lienhe');

Route::get('gioithieu','PageController@getGioiThieu')->name('gioithieu');

Route::get('add-to-cart/{id}','PageController@getAddToCart')->name('themgiohang');

Route::get('delete-cart/{id}','PageController@getDeleteCart')->name('xoagiohang');

Route::get('dat-hang','PageController@getCheckOut')->name('dat-hang');

Route::post('dathang','PageController@postCheckOut')->name('dathang');


Route::get('search','PageController@getSearch')->name('search');

//Admin
Route::get('admin/dangnhap','UserController@getDangNhap');

Route::post('admin/dangnhap','UserController@postDangNhap');

Route::get('admin/dangxuat','UserController@getDangXuat')->name('dangxuat');

Route::get('thongke','BillController@getThongKe')->name('thongke');



Route::group(['prefix'=>'admin','middleware' => 'adminLogin'],function(){
	Route::group(['prefix'=>'billdetail'],function(){
		//admin/billdetail/danhsach
		Route::get('danhsach','BillDetailController@getDanhSach');
	});

	Route::group(['prefix'=>'bill'],function(){
		//admin/bill/danhsach
		Route::get('danhsach','BillController@getDanhSach');
	});

	Route::group(['prefix'=>'customer'],function(){
		//admin/customer/danhsach
		Route::get('danhsach','CustomerController@getDanhSach');
	});

	Route::group(['prefix'=>'product'],function(){
		//admin/product/danhsach
		Route::get('danhsach','ProductController@getDanhSach');
		Route::get('sua/{id}','ProductController@getSua');
		Route::post('sua/{id}','ProductController@postSua')->name('suasanpham');
		Route::get('them','ProductController@getThem');
		Route::post('them','ProductController@postThem')->name('themsanpham');
		Route::get('xoa/{id}','ProductController@getXoa');
	});

	Route::group(['prefix'=>'product_type'],function(){
		//admin/product_type/danhsach
		Route::get('danhsach','ProductTypeController@getDanhSach');
		Route::get('sua/{id}','ProductTypeController@getSua');
		Route::post('sua/{id}','ProductTypeController@postSua');
		Route::get('them','ProductTypeController@getThem');
		Route::post('them','ProductTypeController@postThem');
		Route::get('xoa/{id}','ProductTypeController@getXoa');

	});

	Route::group(['prefix'=>'chitietloai'],function(){
		//admin/chitietloai/danhsach
		Route::get('danhsach','ChiTietLoaiController@getDanhSach');
		Route::get('sua/{id}','ChiTietLoaiController@getSua');
		Route::post('sua/{id}','ChiTietLoaiController@postSua');
		Route::get('them','ChiTietLoaiController@getThem');
		Route::post('them','ChiTietLoaiController@postThem');
		Route::get('xoa/{id}','ChiTietLoaiController@getXoa');

	});

	
	Route::group(['prefix'=>'users'],function(){
		//admin/users/danhsach
		Route::get('danhsach','UserController@getDanhSach');
		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');
		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');
		Route::get('xoa/{id}','UserController@getXoa');
	});
	//admin/trangchu
	Route::get('trangchu','UserController@getTrangChu');
});
