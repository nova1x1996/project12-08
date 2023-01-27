

@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')




<div class="card">
    <div class="card-body">
        <h2 class="text-center ">Order Details</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Create Order Details</button>
        </div>

        <table id="product" class="table ">
            
           
            <thead>
            <tr>
                <th>Order Details Id</th>
                <th>Order Id</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orderdetails as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->order_id}}</td>
                <td>{{$item->product_id}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
              
                <td class="">
                    <a class="btn btn-primary btn-sm" href="{{url('admin/order_details/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/order_details/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/order_details/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Order Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/order_details/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                    <div class="col-6 form-group">
                        <label for="txt-name">Order</label>
                        <select name="order_id" id="" class="form-control">
                            @foreach ($order as $orderID)
                            <option value="{{$orderID->id}}">{{$orderID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Product</label>
                        <select name="product_id" id="" class="form-control">
                            @foreach ($product as $productID)
                            <option value="{{$productID->id}}">{{$productID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Quantity</label>
                        <input type="text" class="form-control" id="txt-name" name="quantity" placeholder="Input Quantity">
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Price</label>
                        <input type="text" class="form-control" id="txt-name" name="price" placeholder="Input Price">
                    </div>
               
    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div> --}}
      </div>
    </div>
  </div>
@endsection
