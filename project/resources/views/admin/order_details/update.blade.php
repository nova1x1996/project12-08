


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Product</h3>
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
    <form role="form" action="{{ url('admin/order_details/postUpdate/'.$order_details->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Product</label>
                <select name="product_id"  class="form-control"  >     
                     @foreach ($product as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Order</label>
                <select name="order_id" id="" class="form-control">
                    @foreach ($order as $typeID)
                    <option value="{{$typeID->id}}">{{$typeID->name}}</option>
                    @endforeach
                </select>
            </div>
           
            <div class="col-6 form-group">
                <label for="txt-name">Price</label>
                <input type="text" class="form-control" id="txt-name" name="price" placeholder="Input Price" value="{{$order_details->price}}">
            </div>
           
            <div class="col-6 form-group">
                <label for="txt-name">Quantity</label>
                <input type="text" class="form-control" id="txt-name" name="quantity" placeholder="Input Quantity" value="{{$order_details->quantity}}">
            </div>
           
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection