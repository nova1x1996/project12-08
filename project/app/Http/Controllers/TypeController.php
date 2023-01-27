<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', compact('types'));
    }
    public function view($id)
    {
        $type = Type::find($id);
        return view('admin.type.view', compact('type'));
    }
    public function create()
    {
        return view('admin.type.create');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $type = $request->all();
        // xử lý upload hình vào thư mục

        $typeNew = new Type($type);
        $typeNew->save();

        return redirect()->route('typeIndex');
    }
    public function delete($id)
    {
        $typeDelete = Type::find($id);
        $typeDelete->delete();
        return redirect()->route('typeIndex');
    }
    public function update($id)
    {
        $s = Type::find($id);
        return view('admin.type.update', compact('s'));
    }
    public function postUpdate(Request $request, $id)
    {
        $type = Type::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        if (strcmp($type->name, $request->input('nameinput')) == 0) {
            $errors = [];
            $errors[] = ' The name cannot be the same as the old name ';
            return redirect()->route('typeUpdate', $id)->with('errors', $errors);
        } else {
            $type->name = $request->input('nameinput');
            $type->save(); //Cập nhật dữ liệu vào database
            return redirect()->route('typeIndex');
        }
    }
}
