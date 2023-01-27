


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create New</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/new/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row card-body">
                            <div class="col-6 form-group">
                                <label for="txt-name">User</label>
                                <select name="user_id" id="" class="form-control">
                                    @foreach ($user as $customerID)
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
                                <label for="txt-name">Parent</label>
                                <input type="text" class="form-control" id="txt-name" name="parent_id" placeholder="Parent">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Title</label>
                                <input type="text" class="form-control" id="txt-name" name="title" placeholder="Title">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Author</label>
                                <input type="text" class="form-control" id="txt-name" name="author" placeholder="Author">
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