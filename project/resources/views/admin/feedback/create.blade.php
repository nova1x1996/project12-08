@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create Feedback</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/feedback/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row card-body">
                            <div class="col-6 form-group">
                                <label for="txt-name">Customer</label>
                                <select name="customer_id" id="" class="form-control">
                                    @foreach ($customer as $customerID)
                                    <option value="{{$customerID->id}}">{{$customerID->name}}</option>
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
                                <label for="txt-name">Rating</label>
                                <input type="text" class="form-control" id="txt-name" name="rating" placeholder="Name">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Content</label>
                                <input type="text" class="form-control" id="txt-name" name="content" placeholder="Content">
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