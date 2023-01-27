<?php

namespace App\Http\Controllers\client;

use App\Models\Customer;
use App\Models\New_new;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $product;
    private $cart;
    private $customer;
    private $order;
    private $type;
    private $supplier;
    public function __construct(Product $product, Order_details $cart, Customer $customer, Order $order, Type $type, Supplier $supplier)
    {
        $this->$product = $product;
        $this->$cart = $cart;
        $this->$customer = $customer;
        $this->$order = $order;
        $this->$type = $type;
        $this->$supplier = $supplier;
    }
    public function index()
    {

        //Tìm sản phẩm bán chạy
        $orders = DB::table('order_details')
            ->select(DB::raw('count(*) as sll, product_id'))
            ->where('product_id', '>', 0)
            ->groupBy('product_id')->orderByDesc('sll')->limit(10)
            ->get();

        $d = $orders->pluck('product_id');
        $spbc = Product::whereIn('id', $d)->where("quantity", ">", "0")->get();
        //Tìm sản phẩm mới
        $spm = DB::table('products')
            ->orderBy('id', 'desc')->where("quantity", ">", "0")->limit(10)
            ->get();

        $products = Product::all();
        $blogall = DB::table('New_news')->limit(3)->get();
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.layout.index', compact('spbc', 'spm', 'products', 'blogall'));
    }

    public function sendEmail(Request $request)
    {
        $a = $request->input('email-dang-ky1');

        $name = $a;
        Mail::send('admin.email.test', compact('name'), function ($email) use ($name) {
            $email->subject('Mona xin kính chào quý khách !');
            $email->to($name, $name);
        });
        return redirect()->back()->with('success', "Email đã được gửi tới khách hàng");
    }

    public function forgetPass()
    {
        return view('client.signin.forgetpass');
    }
    public function postForgetPass(Request $request)
    {

        $bienemail = $request->input('email');
        $cus = Customer::where('email', $bienemail)->first();
        if ($cus == null) {
            return redirect()->back()->with('error', 'Email không tồn tại !');
        }

        $bienpass = random_int(100000000, 999999999);

        $cus->password = Hash::make($bienpass);
        $cus->save();
        $bienname = $cus->name;

        $name = $bienemail;
        Mail::send('admin.email.forgetpass', compact('bienname', 'bienpass'), function ($email) use ($name) {
            $email->subject('Mona gửi lại mật khẩu cho quý khách !');
            $email->to($name, $name);
        });
        return redirect()->back()->with('success', "Email đã được gửi tới khách hàng");
    }
}
