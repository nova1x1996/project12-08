


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/user/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-name">Name</label>
                                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Name">
                               
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Email</label>
                                <input type="text" class="form-control" id="txt-name" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Password</label>
                                <input type="password" class="form-control" id="txt-name" name="password" placeholder="Password">
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