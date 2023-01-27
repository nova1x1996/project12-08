<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function index()
    {
        $productimages = ProductImage::all();
        $products = Product::all();
        return view('admin.product_image.index', compact('productimages', 'products'));
    }
    public function delete($id)
    {
        $productDel = ProductImage::find($id);
        $productDel->delete();
        return redirect()->route('productimageIndex');
    }


    public function postCreate(Request $request)
    {


        $id = $request->input('product_id');
        if ($request->hasfile('img_product')) {

            foreach ($request->file('img_product') as $image) {
                $name = $image->getClientOriginalName();
                $image->move("img/watch/" . $id, $name);
                $productImage = new ProductImage();
                $productImage->product_id = $id;
                $productImage->img_product = "img/watch/" . $id . "/" . $name;
                $productImage->save();
            }
        }
        return redirect()->route('productimageIndex');
    }
}
