<?php

namespace App\Http\Controllers\client;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TaikhoanController extends Controller
{
    public function index()
    {
        return view('client.customer.infor');
    }

    public function update(Request $request, $id)
    {
        $cus = Customer::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        // $cus->password = $request->input('password');
        // $cus->email = $request->input('email');
        $cus->name = $request->input('name');
        $cus->phone = $request->input('phone');
        $cus->address = $request->input('address');

        $cus->save(); //Cập nhật dữ liệu vào database
        return redirect()->back()->with('success', "Bạn đã cập nhật thành công");
    }

    public function changepassIndex()
    {
        return view('client.customer.changepass');
    }
    public function changepass(Request $request, $id)
    {
        $cus = Customer::find($id);

        $old = $request->input('passwordOld');

        if (Hash::check($old, $cus->password)) {

            $cus->password = Hash::make($request->input('passwordNew'));
            $cus->save();
            return redirect()->back()->with('success', "Bạn đã thay đổi mật khẩu thành công");
        } else {
            return redirect()->back()->with('error', "Mật khẩu hiện tại không chính xác");
        }
    }

    public function history()
    {
        $id = Auth::guard("client")->user()->id;
        $order = Order::where("customer_id", $id)->get();

        return view('client.customer.history', compact('order'));
    }

    public function view($id)
    {
        $details = Order_details::where("order_id", $id)->get();
        $order = Order::find($id);

        return view('client.customer.viewhistory', compact('details', 'order'));
    }
}
