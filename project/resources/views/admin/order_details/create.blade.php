
@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create Order Details</h3>
                    </div>
                    <!-- /.card-header -->
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
                <!-- /.card -->
        
</section>
@endsection