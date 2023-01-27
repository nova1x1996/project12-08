<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Role_user;
use App\Models\User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function index()
    {
        $role_users = Role_user::all();
        $role = Role::all();
        $user = User::all();
        return view('admin.role_user.index', compact('role_users', 'role', 'user'));
    }
    public function view($id)
    {
        $role_user = Role_user::find($id);
        return view('admin.role_user.view', compact('role_user'));
    }
    // public function create()
    // {
    //     $role = Role::all();
    //     $user = User::all();
    //     return view('admin.role_user.create', compact('role', 'user'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $role = $request->all();
        // xử lý upload hình vào thư mục

        $roleNew = new Role_user($role);
        $roleNew->save();

        return redirect()->route('roleUserIndex');
    }
    public function delete($id)
    {
        $roleDelete = Role_user::find($id);
        $roleDelete->delete();
        return redirect()->route('roleUserIndex');
    }
    public function update($id)
    {
        $role = Role::all();
        $user = User::all();
        $role_user = Role_user::find($id);
        return view('admin.role_user.update', compact('role_user', 'role', 'user'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = Role_user::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $od->role_id = $request->input('role_id');
        $od->user_id = $request->input('user_id');

        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('roleUserIndex');
    }
}
