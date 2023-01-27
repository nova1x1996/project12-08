<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use Session;

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
        view()->composer(['client.layout.header', 'client.cart.cart', 'client.order.order'], function ($view) {
            if (Session('cart')) {
                $oldcart = Session::get('cart');
                $cart = new cart($oldcart);
                $view->with([
                    'cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'totalPrice' => $cart->totalPrice,
                    'totalQty' => $cart->totalQty
                ]);
            }
        });
        view()->composer(['client.layout.header'], function ($view) {
            if (Auth::guard("client")->check()) {
                $wishlistNumber = Auth::guard("client")->user()->wishlist()->count();
                $view->with([
                    'wishlistNumber' => $wishlistNumber
                ]);
            }
        });
    }
}
