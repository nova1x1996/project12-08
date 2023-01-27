<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $fb = Feedback::all();
        $product = Product::all();
        $customer = Customer::all();
        return view('admin.feedback.index', compact('fb', 'product', 'customer'));
    }

    public function create()
    {
        $product = Product::all();
        $customer = Customer::all();
        return view('admin.feedback.create', compact('product', 'customer'));
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $fb = $request->all();
        // xử lý upload hình vào thư mục

        $fbNew = new Feedback($fb);
        $fbNew->save();

        return redirect()->route('feedbackIndex')->with('success', 'Bạn tạo mới thành công');
    }
    public function delete($id)
    {
        $fbDelete = Feedback::find($id);
        $fbDelete->delete();
        return redirect()->route('feedbackIndex')->with('success', 'Bạn đã xóa thành công');
    }
}
