<?php

namespace App\Http\Controllers;

use App\Models\Role_user;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    public function view($id)
    {
        $user = User::find($id);
        $roles = Role_user::where('user_id', $user->id)->get();
        return view('admin.user.view', compact('user', 'roles'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $user = $request->all();
        // xử lý upload hình vào thư mục

        $userNew = new User($user);
        $userNew->save();

        return redirect()->route('userIndex');
    }
    public function delete($id)
    {
        $userDelete = User::find($id);
        $userDelete->delete();
        return redirect()->route('userIndex');
    }
    public function update($id)
    {
        $user = User::find($id);
        return view('admin.user.update', compact('user'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = User::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $od->name = $request->input('name');
        $od->email = $request->input('email');
        $od->password = $request->input('password');


        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('userIndex');
    }
}
