<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $cus = Customer::all();
        return view('admin.order.index', compact('orders', 'cus'));
    }
    public function view($id)
    {
        $order = Order::find($id);
        return view('admin.order.view', compact('order'));
    }
    // public function create()
    // {
    //     $cus = Customer::all();
    //     return view('admin.order.create', compact('cus'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $order = $request->all();
        // xử lý upload hình vào thư mục

        $orderNew = new Order($order);
        $orderNew->save();

        return redirect()->route('orderIndex');
    }
    public function delete($id)
    {
        $orderDelete = Order::find($id);
        $ordetails = Order_details::where('order_id', $id)->get();
        foreach ($ordetails as $item) {
            $item->delete();
        }
        $orderDelete->delete();
        return redirect()->route('orderIndex')->with('success', 'Bạn xóa thành công');
    }

    public function update($id)
    {
        $customer = Customer::all();
        $order = Order::find($id);
        return view('admin.order.update', compact('order', 'customer'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = Order::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không

        $od->status = $request->input('status');
        $od->ship = $request->input('ship');
        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('orderIndex')->with('success', 'Bạn cập nhật thành công');
    }

    public function print($checkout_code)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }

    public function print_order_convert($checkout_code)
    {



        $order = Order::find($checkout_code);
        $a = 0;
        foreach ($order->order_details as $item) {
            $a = $a + $item->price * $item->quantity;
        }
        $output = '<style>
        body{
        font-family: DejaVu Sans;

        }
        table{
            
       
        margin-bottom:10px;
     }
     .tabletren tr td{
        border:1px solid black;
        text-align:center;
     }
     .tabletren th {
     border:1px solid black;
     width: 170px;}

        .kyten{
            display:flex;
        }
        .a{
            text-align:right;
        }
        </style>
        <table width="100%"><thead><tr>
        <td > <img width="50%" src="https://www.mona.co.uk/such/static/MO/file/logo_6ud9ef_mona.svg"></td>
        
        <td style="text-align:right";><strong>Công Ty TNHH một thành viên MONA</strong></br>
        <strong>ĐC: 319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</strong></td>
        </tr></thead>
        </table>
       
   
        <h1><center>Hóa đơn</center></h1>
        <h4>Hóa đơn : ' . $order->id . '</h4>
        <table class="tabletren table-bordered">
            <tr>
              
                <th>Đồng Hồ</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng giá</th>
            
             
            </tr>
         ';
        foreach ($order->order_details as $item) {
            $output .= '.
            <tr>
               
                <td>' . $item->product->name . '</td>
                <td>' . number_format($item->price) . '</td>
                <td>' . $item->quantity . '</td>
                <td>' . number_format($item->price * $item->quantity) . '</td>
            </tr>';
        }
        $output .= '</table>';
        $output .= '<div class="container">
        <div class="row">
            <div class="col-5 pay"><strong>Tên người nhận: </strong>' . $order->name . '.</div>
            <div class="col-5 pay"><strong>SĐT: </strong>' . $order->phone . '.</div>
            <div class="col-5 pay"><strong>Địa chỉ: </strong>' . $order->address . '.</div>';
        if ($order->discount) {
            $output .= '  <div class="col-12 pay"><strong>Tổng tạm tính: </strong>' . number_format($a) . '₫.</div>
                <div class="col-12 pay"><strong>Giảm giá: </strong>' . number_format($a * $order->discount->name / 100) . '₫' . '(' . $order->discount->name . '%)' . '.</div>
                <div class="col-12 pay"><strong>Tổng thanh toán: </strong> ' . number_format($order->total) . ' ₫.</div>';
        } else {
            $output .= ' <div class="col-12 pay"><strong>Tổng tạm tính: </strong>' . number_format($order->total) . '₫.</div>   
            <div class="col-12 pay"><strong>Tổng thanh toán: </strong>' . number_format($order->total) . ' ₫.</div>';
        }

        $output .= '  </div>
        </div>
    ';
        $output .= '<div>Ký tên</div>

        <table width="100%"><thead><tr>
        <td ><strong>Người lập phiếu</strong></td>
        
        <td style="text-align:right";><strong>Người nhận hàng</strong></td>
        </tr></thead>
        </table>
     
        ';

        //  </table>';

        return $output;
    }
}
