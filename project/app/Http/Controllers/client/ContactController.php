<?php

namespace App\Http\Controllers\client;

use App\Models\Report;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.contact.contact');
    }

    public function postCreate(Request $request)
    {
        $rp = $request->all();
        $rpnew = new Report($rp);
        $rpnew->save();
        return view('client.contact.contact')->with('success', 'Bạn đã gửi phản hồi thành công');
    }
}
