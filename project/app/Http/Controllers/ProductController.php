<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $a = Product::all();
        foreach ($a as $item) {
            if ($item->quantity == 0) {
                $item->state = "Hết hàng";
                $item->save();
            }
        }
        $products = Product::all();
        $suppliers = Supplier::all();
        $types = Type::all();
        return view('admin.product.index', compact('products', 'suppliers', 'types'));
    }
    public function view($id)
    {
        $product = Product::find($id);
        return view('admin.product.view', compact('product'));
    }
    // public function create()
    // {
    //     $suppliers = Supplier::all();
    //     $types = Type::all();
    //     return view('admin.product.create', compact('suppliers'), compact('types'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $product = $request->all();

        $productNew = new Product($product);



        if ($request->hasFile('img')) {

            $file = $request->file('img');

            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/product/index')->with('error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/watch/" . $productNew->id, $imageName);
        } else {
            $imageName = null;
        }
        $productNew->img = "img/watch/" . $productNew->id . "/" . $imageName;
        $productNew->save();

        if ($request->hasfile('img_product')) {

            foreach ($request->file('img_product') as $image) {
                $name = $image->getClientOriginalName();
                $image->move("img/watch/" . $productNew->id, $name);
                $productImage = new ProductImage();
                $productImage->product_id = $productNew->id;
                $productImage->img_product = "img/watch/" . $productNew->id . "/" . $name;
                $productImage->save();
            }
        }
        return redirect()->route('productIndex')->with('success', 'Bạn đã thêm mới thành công');
    }
    public function delete($id)
    {
        $productDel = Product::find($id);
        $productIMG = ProductImage::where('product_id', $id)->get();
        foreach ($productIMG as $item) {
            $item->delete();
        }
        $productDel->delete();
        return redirect()->route('productIndex')->with('success', 'Bạn đã xóa thành công');
    }
    public function update($id)
    {
        $t = Type::all();
        $s = Supplier::all();
        $p = Product::find($id);
        return view('admin.product.update', compact('p', 's', 't'));
    }
    public function postUpdate(Request $request, $id)
    {
        $p = Product::find($id);
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/product/index')->with('error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();

            $file->move("img/watch/" .  $p->id, $imageName);
            $p->img = "img/watch/" . $p->id . "/" . $imageName;
        } else { // không upload hình mới => giữ lại hình cũ
            $imageName = $p->img;
        }
        //ĐỀ lên giá trị cũ từ input
        $p->name = $request->input('name');
        $p->price = $request->input('price');
        $p->information = $request->input('information');
        $p->descript = $request->input('descript');
        $p->quantity = $request->input('quantity');
        $p->state = $request->input('state');

        $p->supplier_id = $request->input('supplier_id');
        $p->type_id = $request->input('type_id');
        $p->save();


        return redirect()->route('productIndex')->with('success', 'Bạn đã cập nhật thành công');;
    }
}
