@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="container infor_customer">
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
                            <th>Thanh toán</th>             
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
                                <a class="btn btn-primary btn-sm" href="{{url('admin/order/view/'.$product->id)}}">
                                     Xem
                                </a>
                            </td>
                            <th>{{number_format($product->total)}} đ</th>        
                            </tr>
                        @endforeach

                    </table>
                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">Lịch sử Comment </h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Chấm điểm</th>
                            <th>Nội dung</th>
                            <th>Sản phẩm</th>
                            
                              
                        </tr>
                        @foreach($feedback as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->rating}}</td>
                                <td>{{$item->content}}</td>
                                <td>{{$item->product->name}}</td>
                       
                                   
                            </tr>
                        @endforeach

                    </table>
                
                </div>
            </div>
        </div>
    

@endsection