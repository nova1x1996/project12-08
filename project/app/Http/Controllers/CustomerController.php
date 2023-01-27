<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('admin.customer.index', compact('customers'));
    }
    public function view($id)
    {
        $customer = Customer::find($id);
        $order = Order::where("customer_id", $id)->get();
        $feedback = Feedback::where("customer_id", $id)->get();
        return view('admin.customer.view', compact('customer', 'order', 'feedback'));
    }
    public function create()
    {
        return view('admin.customer.create');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $customer = $request->all();
        // xử lý upload hình vào thư mục
        $customer['password'] = Hash::make($customer['password']);
        $customerNew = new Customer($customer);
        $customerNew->save();

        return redirect()->route('customerIndex')->with('success', 'Bạn tạo thành công');;
    }

    public function delete($id)
    {
        $typeDelete = Customer::find($id);
        $order = Order::where("customer_id", $id)->first();

        if ($order) {
            return redirect()->back()->with('error', "Không thể xóa khách hàng có đơn hàng");
        }

        $typeDelete->delete();
        return redirect()->route('customerIndex')->with('success', 'Bạn đã xóa thành công');;
    }
    public function update($id)
    {
        $customer = Customer::find($id);

        return view('admin.customer.update', compact('customer'));
    }
    public function postUpdate(Request $request, $id)
    {
        $cus = Customer::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không

        // $cus->password =  Hash::make($request->input('password'));
        $cus->email = $request->input('email');
        $cus->name = $request->input('name');
        $cus->phone = $request->input('phone');
        $cus->address = $request->input('address');

        $cus->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('customerIndex')->with('success', 'Bạn đã cập nhật thành công');;
    }
}
