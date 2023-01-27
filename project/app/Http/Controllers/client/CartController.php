<?php

namespace App\Http\Controllers\client;

use App\Models\Cart;
use App\Models\Discount;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index()
    {
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.cart.cart');
    }
    public function discount(Request $request)
    {
        $discount = Discount::where('code', $request->input('code'))->first();

        if (!$discount) {
            return redirect()->back()->with('error', 'Mã giảm giá không chính xác');
        }
        if ($discount->order) {
            return redirect()->back()->with('error', 'Mã giảm giá đã sử dụng');
        } else {
            $oldcart = Session::get('cart');
            $cart = new Cart($oldcart);
            $cart->setDiscount($discount);
            Session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Mã giảm giá có thể sử dụng');
        }
        // return view('client.cart.cart');
    }
}
