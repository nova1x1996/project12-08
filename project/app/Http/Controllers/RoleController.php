<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Role_user;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }
    public function view($id)
    {
        $role = Role::find($id);
        $users = Role_user::where('role_id', $role->id)->get();

        return view('admin.role.view', compact('role', 'users'));
    }
    public function create()
    {
        return view('admin.role.create');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $role = $request->all();
        // xử lý upload hình vào thư mục

        $roleNew = new Role($role);
        $roleNew->save();

        return redirect()->route('roleIndex');
    }
    public function delete($id)
    {
        $roleDelete = Role::find($id);
        $roleDelete->delete();
        return redirect()->route('roleIndex');
    }
    public function update($id)
    {
        $role = Role::find($id);
        return view('admin.role.update', compact('role'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = Role::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $od->name = $request->input('name');
        $od->slug = $request->input('slug');

        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('roleIndex');
    }
}
