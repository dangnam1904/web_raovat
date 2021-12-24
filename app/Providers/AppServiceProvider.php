<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\group_san_pham;
use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp = group_san_pham::all();
            
            $view->with('loai_sp',$loai_sp);
        });

        // view()->composer(['header','page.dat_hang'],function($view){
        //     if(Session('cart')){
        //         $oldCart = Session::get('cart');
        //         $cart = new Cart($oldCart);
        //         $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        //     }
        // });
    }
}
