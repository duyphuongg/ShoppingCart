<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;
use App\ChiTietLoai;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loaisp = ProductType::all();
            $view->with('loaisp',$loaisp);
            
        });
        view()->composer(['header','page.dathang'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]); 
            }

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
