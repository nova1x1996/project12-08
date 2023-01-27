

@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Cập nhật Đơn Hàng {{$order->id}}</h3>
        {{-- @if(session('errors1'))
            <div>
                {{session('errors1')}}
            </div>
            @endif --}}
        @php
        if(count($errors) > 0){
            echo "<p class='alert alert-danger'>Error: $errors[0]</p>";
        }
        @endphp
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ url('admin/order/postUpdate/'.$order->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            @if($order->customer_id)
            <div class="col-6 form-group">
                <label for="txt-name">Khách hàng</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Username" value="{{$order->customer->name}}" disabled>
            </div>
            @else
            <div class="col-6 form-group">
                <label for="txt-name">Khách hàng</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Username" value="None" disabled>
            </div>
            @endif
            <div class="col-6 form-group">
                <label for="txt-name">Tên</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Username" value="{{$order->name}}" disabled>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Địa chỉ</label>
                <input type="text" class="form-control" id="txt-name" name="address" placeholder="Address" value="{{$order->address}}" disabled>
            </div>
          
            <div class="col-6 form-group">
                <label for="txt-name">SĐT</label>
                <input type="text" class="form-control" id="txt-name" name="phone" placeholder="Phone" value="{{$order->phone}}" disabled>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Trạng thái</label>
                <select name="status"  class="form-control">
                    @if($order->status == 0)
                    <option value="{{$order->status}}">Chưa thanh toán</option>
                    <option value="1">Đã thanh toán</option>
                    @else
                    <option value="{{$order->status}}">Đã thanh toán</option>
                    <option value="0">Chưa thanh toán</option>
                    @endif                       
                    
                </select>
            </div>
            
            <div class="col-6 form-group">
                <label for="txt-name">Hình thức</label>
                <select name="payment"  class="form-control"  disabled>     
                    @if($order->payment == 0)
                    <option value="{{$order->payment}}">COD</option>
                    <option value="1">Banking</option>
                    @else
                    <option value="{{$order->status}}">Banking</option>
                    <option value="0">COD</option>
                    @endif    
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Giao hàng</label>
                <select name="ship"  class="form-control">
                    @if($order->ship == 0)
                    <option value="{{$order->ship}}">Chưa giao</option>
                    <option value="1">Đã giao</option>
                    @else
                    <option value="{{$order->ship}}">Đã giao</option>
                    <option value="0">Chưa giao</option>
                    @endif                       
                    
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Xác nhận</button>
        </div>
    </form>
    
    
</div>
@endsection