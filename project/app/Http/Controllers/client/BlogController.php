<?php

namespace App\Http\Controllers\client;

use App\Models\New_new;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {

        $blogs = New_new::all();
        $blogall = New_new::all();
        return view('client.blog.blog', compact('blogs', 'blogall'));
    }

    public function indexblogcontent($id)
    {
        $blog = New_new::find($id);
        $blogall = New_new::all();


        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.blog.content', compact('blog', 'blogall'));
    }
}
