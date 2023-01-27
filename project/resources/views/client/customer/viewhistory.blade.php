@extends('client.layout.layout') @section('title', 'product index')
@section('content')
<style>
    .infor_customer{
        padding:25px 0;
    }
    .infor_customer h3{
        text-align: center;
    }
    .infor_customer button{
      border-color:#c89979;
      margin-left: 15px;
    }
    
    .span-alert{
        margin-left: 0px;
       color: red;  
    }
    .infor_customer .left h4{
        border: 1px solid #ddd;
        padding: 10px;
        color: black;
        font-size: 17px;
        margin-top: 5px;
    }
    .infor_customer .left h4 a{
        color: black;
    }
    .card-body table tr th{
        text-align: center;
    }
    .card-body table tr td{
        text-align: center;
    }
</style>


<div class="container infor_customer">
    
    <div class="row">
        <h3>Thông tin người dùng</h3>
        <div class="col-3 left" >
            <h4><a href="{{route('Taikhoan')}}">Thông tin người dùng</a></h4>
            <h4><a href="{{route('changePassIndex')}}">Thay đỗi mật khẩu</a></h4>
            <h4><a href="{{route('historyOrder')}}">Lịch sử mua hàng</a></h4>
        </div>
        <div class="col-9 ">
            <div class="card">
   
        

                <div class="card-body">
                    <h2 class="text-center mb-3">Chi tiết đơn hàng</h2>
              
                    <table class="table table-bordered">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                      
                        </tr>
                        @php
                        $a = 0;
                        @endphp
                        @foreach($details as $orderdetails)
                            <tr>
                            
                                <td>{{$orderdetails->product->name}}</td>
                                <td><img src="{{asset($orderdetails->product->img)}}" alt=""></td>
                                <td>{{$orderdetails->quantity}}</td>
                                <td>{{number_format($orderdetails->price)}}</td>
                                @php
                                 
                                 $a = $a + ($orderdetails->quantity*$orderdetails->price);
                                @endphp
                                <th>{{number_format($orderdetails->quantity*$orderdetails->price)}}</th>
                             
                            </tr>
                            
                         
                        @endforeach

                    </table>
                    @if($order->discount == null)
                        <div style="font-weight: bold;">Tổng tiền thanh toán : {{number_format($a)}} ₫.</div>
                    @else
                    <div style="font-weight: bold;">Tổng tiền : {{number_format($a)}} ₫.</div>
                    <div style="font-weight: bold;">Giảm giá khuyến mãi : {{number_format($a*$order->discount->name/100)}} ₫.</div>
                    <div style="font-weight: bold;">Thanh toán : {{number_format($a-($a*$order->discount->name/100))}} ₫.</div>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection