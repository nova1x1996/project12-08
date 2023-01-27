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
                    <h2 class="text-center mb-3">Lịch sử mua hàng </h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã số đơn hàng</th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Discount</th>
                            <th>Chi tiết</th>
                          
                         
                         
                        </tr>
                        @foreach($order as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->address}}</td>
                                <td>{{$product->phone}}</td>

                                @if($product->discount != null)
                                    <td class="text-success">Giảm {{$product->discount->name}} %</td>
                                
                                @else
                                    <td class="text-danger">Không có</td>
                                
                                @endif
                                <td class="">
                                <a class="btn btn-primary btn-sm" href="{{url('tai-khoan/history/'.$product->id)}}">
                                     Xem
                                </a>
                            </td>
                            
                            </tr>
                
                        @endforeach

                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection