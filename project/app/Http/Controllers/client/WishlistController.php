<?php

namespace App\Http\Controllers\client;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        $wishlist = Wishlist::where('customer_id', Auth::guard("client")->user()->id)->get();
        return view('client.wishlist.wishlist', compact('wishlist'));
    }
    public function addToWishlist(Request $req)
    {
        if (Auth::guard("client")->user() == null) {
            return redirect()->route("SignInIndex")->with("error", "Vui lòng đăng nhập trước khi thêm sản phẩm vào danh mục yêu thích");
        }
        $wishlistFound = Wishlist::where('customer_id', Auth::guard("client")->user()->id)->where('product_id', $req->id)->get();
        if ($wishlistFound->isEmpty()) {
            $wishlist = new Wishlist();
            $wishlist->customer_id = Auth::guard("client")->user()->id;
            $wishlist->product_id = $req->id;
            $wishlist->save();
        }
        return redirect()->back();
    }

    public function removeFromWishlist(Request $req)
    {
        if (Auth::guard("client")->user() == null) {
            return redirect()->route("SignInIndex")->with("error", "Vui lòng đăng nhập trước khi xóa sản phẩm khỏi danh mục yêu thích");
        }
        $wishlistFound = Wishlist::where('customer_id', Auth::guard("client")->user()->id)->where('product_id', $req->id)->get();
        if ($wishlistFound->isNotEmpty()) {
            $wishlistFound->each->delete();
        }
        return redirect()->back();
    }
}
