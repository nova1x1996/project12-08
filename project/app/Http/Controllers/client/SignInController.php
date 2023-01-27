<?php

namespace App\Http\Controllers\client;

use App\Http\Requests\LoginClientRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    public function index()
    {
        // return view('client.layout.index', compact('products'));
        return view('client.signin.signin');
    }
    public function postCreate(Request $request)
    {
        $bienemail = $request->input('email');
        $cus = Customer::all();
        foreach ($cus as $item) {
            if ($item->email === $bienemail) {
                return redirect()->back()->with('error', 'Email đã tồn tại !');
            }
        }

        // nhận tất cả tham số vào mảng Supplier
        $customer = $request->all();

        $customer['password'] = Hash::make($customer['password']);
        $customerNew = new Customer($customer);
        $customerNew->save();

        return redirect()->route('SignInIndex')->with("success", "Đăng ký thành công");
    }
    public function postSignin(LoginClientRequest $request)
    {
        $data = $request->only("email", "password");
        if (Auth::guard("client")->attempt($data)) {
            return redirect()->route("Home");
        } else {
            return redirect()->back()->with("error", "Tài khoản hoặc mật khẩu không đúng");
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::guard("client")->logout();
        return redirect()->route("Home");
    }
}
