<?php

namespace App\Http\Controllers\client;

use App\Models\Cart;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class OrderClientController extends Controller
{
    public function index()
    {
        return view('client.order.order');
    }
    public function create(Request $request)
    {
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        //Kiểm tra số lượng sản phẩm xem có đủ để bán cho khách không
        foreach ($cart->items as $aaa) {
            $product = Product::find($aaa['item']['id']);
            if ($product->quantity < $aaa['qty']) {
                return redirect()->back()->with("error", "Xin lỗi khách hàng $product->name chỉ còn $product->quantity chiếc !! Mong quý khách chọn lại số lượng !!");
            }
        }

        //1. Đầu tiên tạo Order
        $order = $request->all();
        $orderNew = new Order($order);
        $orderNew->status = 0;
        //Kiểm tra discount
        if ($cart->discount) {
            $sotiendagiamgia = ($cart->totalPrice - ($cart->totalPrice * $cart->discount['name'] / 100));
            $orderNew->total = $sotiendagiamgia;
            $orderNew->discount_id = $cart->discount['id'];
            $discount = Discount::find($cart->discount['id']);
            $discount->state = 1;
            $discount->save();
        } else {
            $orderNew->total = $cart->totalPrice;
        }


        //2. Kiểm tra ng dùng có đang đăng nhập hay không
        if (Auth::guard('client')->check()) {
            $orderNew->customer_id = Auth::guard('client')->user()->id;
        }

        //3. Tạo Order Details


        if (Session::has('cart')) {
            $orderNew->save();

            foreach ($cart->items as $aaa) {
                $orderDetails = new Order_details();
                $orderDetails->order_id = $orderNew->id;
                $orderDetails->product_id = $aaa['item']['id'];
                $orderDetails->quantity = $aaa['qty'];
                $orderDetails->price = $aaa['item']['price'];
                $orderDetails->save();
                //Xóa quantity trong product
                $product = Product::find($aaa['item']['id']);
                $product->quantity = $product->quantity - $aaa['qty'];
                $product->save();
            }
        }

        if ($request->input('payment') == 0) {
            Session::forget('cart');
            return redirect()->route('Home')->with('success', "Bạn đã đặt hàng thành công");
        } elseif ($request->input('payment') == 1) {

            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://127.0.0.1:8000/order";
            $vnp_TmnCode = "CFLI4OMH"; //Mã website tại VNPAY 
            $vnp_HashSecret = "VLDAVRHRDMPZIGNWQNUMNUFOTXQHOEZN"; //Chuỗi bí mật

            $vnp_TxnRef = $orderNew->id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Thanh toán đơn hàng test';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $orderNew->total * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            //Add Params of 2.0.1 Version
            // $vnp_ExpireDate = $_POST['txtexpire'];
            //Billing

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,


            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }

            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
            );
            Session::forget('cart');

            return redirect($vnp_Url);
        }
    }

    public function vnpay()
    {
    }
}
