<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index', compact('suppliers'));
    }
    public function create()
    {
        return view('admin.supplier.create');
    }
    public function view($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.supplier.view', compact('supplier'));
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $sup = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/supplier/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img", $imageName);
        } else {
            $imageName = null;
        }
        //-----

        $supNew = new Supplier($sup);
        $supNew->logo = $imageName;
        $supNew->save();

        return redirect()->route('supplierIndex');
    }
    public function delete($id)
    {
        $supDelete = Supplier::find($id);
        $supDelete->delete();
        return redirect()->route('supplierIndex');
    }
    public function update($id)
    {
        $sup = Supplier::find($id);
        return view('admin.supplier.update', compact('sup'));
    }
    public function postUpdate(Request $request, $id)
    {
        $supUpdate = Supplier::find($id);

        // xử lý upload hình vào thư mục
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $imageName = $supUpdate->logo;
        }
        //ĐỀ lên giá trị cũ từ input
        $supUpdate->name = $request->input('name');
        $supUpdate->logo = $imageName;
        $supUpdate->save();
        return redirect()->route('supplierIndex');
    }
}
