<?php

namespace App\Http\Controllers;

use App\Models\New_new;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $new = New_new::all();
        $product = Product::all();
        $user = User::all();
        return view('admin.new.index', compact('new', 'product', 'user'));
    }
    public function view($id)
    {
        $new = New_new::find($id);
        return view('admin.new.view', compact('new'));
    }
    // public function create()
    // {
    //     $product = Product::all();
    //     $user = User::all();
    //     return view('admin.new.create', compact('product', 'user'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $new = $request->all();
        $newObj = new New_new($new);

        // xử lý upload hình vào thư mục
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/new/index')->with('error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/", $imageName);
        } else {
            $imageName = null;
        }


        $newObj->img = "img/" . $imageName;
        $newObj->save();

        return redirect()->route('newIndex')->with('success', 'Bạn đã tạo mới thành công');
    }
    public function delete($id)
    {
        $fbDelete = New_new::find($id);
        $fbDelete->delete();
        return redirect()->route('newIndex')->with('success', 'Bạn đã xóa thành công');
    }
    public function update($id)
    {
        $product = Product::all();
        $user = User::all();
        $new = New_new::find($id);
        return view('admin.new.update', compact('product', 'user', 'new'));
    }

    public function postUpdate(Request $request, $id)
    {
        $p = New_new::find($id);
        // xử lý upload hình vào thư mục
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/new/index')->with('error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();

            $file->move("img", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $imageName = $p->img;
        }
        //ĐỀ lên giá trị cũ từ input
        $p->user_id = $request->input('user_id');
        $p->title = $request->input('title');
        $p->img = "img/" . $imageName;;
        $p->author = $request->input('author');
        $p->blogcontent = $request->input('blogcontent');
        $p->save();
        return redirect()->route('newIndex')->with('success', 'Bạn đã cập nhật thành công');
    }
}
