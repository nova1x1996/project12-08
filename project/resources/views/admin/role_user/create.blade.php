


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create Role User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/role_user/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row card-body">
                            <div class="col-6 form-group">
                                <label for="txt-name">Role</label>
                                <select name="role_id" id="" class="form-control">
                                    @foreach ($role as $orderID)
                                    <option value="{{$orderID->id}}">{{$orderID->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">User</label>
                                <select name="user_id" id="" class="form-control">
                                    @foreach ($user as $productID)
                                    <option value="{{$productID->id}}">{{$productID->name}}</option>
                                    @endforeach
                                </select>
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