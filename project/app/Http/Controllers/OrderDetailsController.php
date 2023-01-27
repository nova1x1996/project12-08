<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function index()
    {
        $orderdetails = Order_details::all();
        $product = Product::all();
        $order = Order::all();
        return view('admin.order_details.index', compact('orderdetails', 'product', 'order'));
    }
    // public function create()
    // {
    //     $product = Product::all();
    //     $order = Order::all();
    //     return view('admin.order_details.create', compact('product'), compact('order'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $order = $request->all();
        // xử lý upload hình vào thư mục

        $orderNew = new Order_details($order);
        $orderNew->save();

        return redirect()->route('order_detailsIndex');
    }
    public function update($id)
    {
        $product = Product::all();
        $order = Order::all();
        $order_details = Order_details::find($id);
        return view('admin.order_details.update', compact('order', 'product', 'order_details'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = Order_details::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $od->order_id = $request->input('order_id');
        $od->product_id = $request->input('product_id');
        $od->quantity = $request->input('quantity');
        $od->price = $request->input('price');

        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('order_detailsIndex');
    }
}
