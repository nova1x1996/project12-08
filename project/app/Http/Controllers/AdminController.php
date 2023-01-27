<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('login');
    }

    public function postloginAdmin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($arr)) {
            return redirect()->route('Index');
        } else {
            dd('Thất bại');
        }

        //

    }
    public function index()
    {   //Total
        $totalsale = 0;
        $order = Order::where("status", 1)->get();
        foreach ($order as $item) {
            $totalsale += $item->total;
        }
        //Total wacth
        $watch = Product::all()->count();
        //Total customer
        $cus = Customer::all()->count();
        //Total comment
        $comment = Feedback::all()->count();
        //Chart
        $supplier = Supplier::all();
        $array = [];
        foreach ($supplier as $item) {
            $array[] = array(
                "name" => $item->name,
                "count" => Order_details::whereHas("product", function ($query) use ($item) {
                    return $query->where("supplier_id", $item->id);
                })->sum("quantity")
            );
        }


        return view('admin.index', compact('totalsale', 'array', 'watch', 'comment', 'cus'));
    }
    public function testEmail()
    {
        $name = 'Trần Minh Khôi';
        Mail::send('admin.email.test', compact('name'), function ($email) use ($name) {

            $email->to('nova1x1996@gmail.com', $name);
        });
    }
}
