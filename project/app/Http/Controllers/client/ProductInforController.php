<?php

namespace App\Http\Controllers\client;

use App\Models\Feedback;
use App\Models\New_new;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductInforController extends Controller
{
    public function index($id)
    {

        $product = Product::find($id);
        $feedback = Feedback::where('product_id', $id)->get();
        $sptuongtu = Product::where('type_id', $product->type_id)->where('supplier_id', $product->supplier_id)->get();

        $productImages = ProductImage::where('product_id', $product->id)->get();

        // return view('client.layout.index', compact('products'));
        return view('client.infor', compact('product', 'productImages', 'feedback', 'sptuongtu'));
    }

    public function search()
    {
        $suppliers = Supplier::all();
        $search_text = $_GET['query'];
        $blogall = New_new::all();
        $products = Product::where('name', 'LIKE', '%' . $search_text . '%')->where("quantity", ">", "0")->get();
        return view('client.search.search', compact('products', 'suppliers', 'blogall'));
    }
    public function filter(Request $request)
    {
        $products = Product::all();
        $blogall = New_new::all();
        $suppliers = Supplier::all();
        $filterprice = $request->price;

        if ($request->name) {
            if ($filterprice == 1) {
                $products = $products->whereIn("supplier_id", $request->name)->where('price', ">=", 1000000)->where("price", "<=", 10000000);
            } else if ($filterprice == 2) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 10000000)->where("price", "<=", 20000000);
            } else if ($filterprice == 3) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 20000000)->where("price", "<=", 50000000);
            } else if ($filterprice == 4) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 50000000)->where("price", "<=", 100000000);
            } else if ($filterprice == 5) {
                $products =  $products->whereIn("supplier_id", $request->name)->where('price', ">=", 100000000)->where("price", "<=", 200000000);
            } else {
                $products = $products->whereIn("supplier_id", $request->name);
            }
        } else {
            if ($filterprice == 1) {
                $products = $products->where('price', ">=", 1000000)->where("price", "<=", 10000000);
            } else if ($filterprice == 2) {
                $products =  $products->where('price', ">=", 10000000)->where("price", "<=", 20000000);
            } else if ($filterprice == 3) {
                $products =  $products->where('price', ">=", 20000000)->where("price", "<=", 50000000);
            } else if ($filterprice == 4) {
                $products =  $products->where('price', ">=", 50000000)->where("price", "<=", 100000000);
            } else if ($filterprice == 5) {
                $products =  $products->where('price', ">=", 100000000)->where("price", "<=", 200000000);
            } else {
                $products = Product::all();
            }
        }

        $products = $products->where("quantity", ">", 0);

        return view('client.search.search', compact('products', 'suppliers', 'blogall'));
    }
    public function createComment(Request $request)
    {
        //Kiểm tra khách hàng đã mua hàng chưa
        $order = Order::where('customer_id', $request->input('customer_id'))->first();
        if (!$order) {
            return redirect()->back()->with('error', 'Bạn vẫn chưa mua hàng nên không thể bình luận');
        }
        //Nếu khách đã mua hàng thì cho comment

        $feedbacknew = new Feedback();
        $feedbacknew->rating = $request->input('rating');
        $feedbacknew->content = $request->input('content');
        $feedbacknew->product_id = $request->input('product_id');
        $feedbacknew->customer_id = $request->input('customer_id');
        $feedbacknew->save();
        return redirect()->back()->with('success', 'Bạn đã bình luận thành công');
    }
}
