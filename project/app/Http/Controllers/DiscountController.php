<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Discount;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.discount.index', compact('discounts'));
    }
    public function view($id)
    {
        $discount = Discount::find($id);

        return view('admin.discount.view', compact('discount'));
    }
    public function delete($id)
    {
        $discountDel = Discount::find($id);
        $order = Order::where('discount_id', $id)->first();
        if ($order) {
            return redirect()->back()->with('error', 'Bạn phải xóa hóa đơn liên kết với mã giảm giá này trước !!!');
        }
        $discountDel->delete();
        return redirect()->route('discountIndex')->with('success', 'Bạn đã xóa thành công');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $discount = $request->all();
        // xử lý upload hình vào thư mục

        $discountNew = new Discount($discount);
        $discountNew->save();

        return redirect()->route('discountIndex')->with('success', 'Bạn đã tạo mới thành công');
    }

    public function sendindex($id)
    {
        // nhận tất cả tham số vào mảng Supplier
        $customer = Customer::all();
        // xử lý upload hình vào thư mục

        $discount = Discount::find($id);

        return view('admin.discount.send', compact('customer', 'discount'));
    }
    public function sendEmail(Request $request)
    {

        $code = $request->input('code');
        $phantramgiamgia = $request->input('name');
        $a = $request->input('email');

        $name = $a;
        Mail::send('admin.email.discount', compact('name', 'code', 'phantramgiamgia'), function ($email) use ($name) {
            $email->subject('Mona Shop Tri Ân Khách Hàng');
            $email->to($name, $name);
        });
        return redirect()->route('discountIndex')->with('success', "Mã giảm giá đã được gửi tới khách hàng");
    }
}
