<?php

namespace App\Http\Controllers\client;

use App\Models\New_new;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class WatchWomenController extends Controller
{
    public function index()
    {

        $products = Product::where("type_id", 2)->where("quantity", ">", "0")->get();
        $suppliers = Supplier::all();
        $blogall = New_new::all();
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));


        return view('client.type.women', compact('products', 'suppliers', 'blogall'));
    }
    public function filter(Request $request)
    {
        $products = Product::where("type_id", 2)->where("quantity", ">", "0");
        $blogall = New_new::all();
        $suppliers = Supplier::all();
        $filterprice = $request->price;

        if ($request->name) {
            if ($filterprice == 1) {
                $products = $products->whereIn("supplier_id", $request->name)->where('price', ">=", 1000000)->where("price", "<=", 10000000)->get();
            } else if ($filterprice == 2) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 10000000)->where("price", "<=", 20000000)->get();
            } else if ($filterprice == 3) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 20000000)->where("price", "<=", 50000000)->get();
            } else if ($filterprice == 4) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 50000000)->where("price", "<=", 100000000)->get();
            } else if ($filterprice == 5) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 100000000)->where("price", "<=", 200000000)->get();
            } else {
                $products = $products->whereIn("supplier_id", $request->name)->get();
            }
        } else {
            if ($filterprice == 1) {
                $products = $products->where('price', ">=", 1000000)->where("price", "<=", 10000000)->get();
            } else if ($filterprice == 2) {
                $products =  $products->where('price', ">=", 10000000)->where("price", "<=", 20000000)->get();
            } else if ($filterprice == 3) {
                $products =  $products->where('price', ">=", 20000000)->where("price", "<=", 50000000)->get();
            } else if ($filterprice == 4) {
                $products =  $products->where('price', ">=", 50000000)->where("price", "<=", 100000000)->get();
            } else if ($filterprice == 5) {
                $products =  $products->where('price', ">=", 100000000)->where("price", "<=", 200000000)->get();
            } else {
                $products = Product::where("type_id", 2)->get();
            }
        }









        return view('client.type.women', compact('products', 'suppliers', 'blogall'));
    }
}
