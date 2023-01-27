@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create Order</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/order/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row card-body">
                           
                            <div class="col-6 form-group">
                                <label for="txt-name">Customer</label>
                                <select name="customer_id" id="" class="form-control">
                                    @foreach ($cus as $cusID)
                                    <option value="{{$cusID->id}}">{{$cusID->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Name</label>
                                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Name">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Address</label>
                                <input type="text" class="form-control" id="txt-name" name="address" placeholder="Address">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Country</label>
                                <input type="text" class="form-control" id="txt-name" name="country" placeholder="Country">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Phone</label>
                                <input type="text" class="form-control" id="txt-name" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Email</label>
                                <input type="text" class="form-control" id="txt-name" name="email" placeholder="Email">
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