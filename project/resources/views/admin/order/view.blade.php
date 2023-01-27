@extends('admin.layout.layout')
@section('title','product index')
@section('content')
<style>
    .pay{
        font-size:20px;

    }
    .nutin{
        font-size: 15px;
        margin-top:15px;
        margin-left: 15px;
    }
</style>
<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Hóa đơn : {{$order->id}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>Ảnh </th>
                <th>Đồng Hồ</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng giá</th>
            
             
            </tr>
            @php
            $a = 0;
            @endphp
            @foreach($order->order_details as $item)
                <tr>
                    <td><img src="{{asset($item->product->img)}}" alt=""></td>
                    <td>{{$item->product->name}}</td>
                    <td>{{number_format($item->price)}}</td>
                    <td>{{$item->quantity}}</td>
                    
                    @php
            $a = $a + $item->price*$item->quantity;
            @endphp
                    <td class="text-success">{{number_format($item->price*$item->quantity)}}</td>
                </tr>
    
            @endforeach
        </table>
        <div class="container">
            <div class="row">
                <div class="col-5 pay"><strong>Tên:</strong> {{$order->name}}</div>
                <div class="col-5 pay"><strong>SĐT:</strong> {{$order->phone}}</div>
                <div class="col-5 pay"><strong>Địa chỉ:</strong> {{$order->address}}</div>
                @if($order->discount)
                <div class="col-12 pay"><strong>Tổng tạm tính:</strong> {{number_format($a)}} ₫</div>
                <div class="col-12 pay"><strong>Giảm giá:</strong> {{number_format($a*$order->discount->name/100)}} ₫ ({{$order->discount->name}}%) </div>
                <div class="col-12 pay"><strong>Tổng thanh toán:</strong> {{number_format($a - ($a*$order->discount->name/100))}} ₫</div>
            @else
            <div class="col-12 pay"><strong>Tổng tạm tính:</strong> {{number_format($a)}} ₫</div>   
            <div class="col-12 pay"><strong>Tổng thanh toán:</strong> {{number_format($a)}} ₫</div>
            @endif
            </div>
        </div>
      <a class="nutin btn btn-info btn-sm" href="{{url('admin/order/print/'.$order->id)}}">IN HÓA ĐƠN</a>
        
     
    </div>
</div>

   



@endsection