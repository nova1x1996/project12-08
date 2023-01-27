


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')




<div class="card">
    <div class="card-body">
        <h2 class="text-center ">Role User</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Add New Role</button>
        </div>

        <table id="product" class="table">
          
            <thead>
            <tr>
                <th>RoleUser ID</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Role ID</th>
                <th>Role Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($role_users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->role_id}}</td>
                <td>{{$item->role->name}}</td>
        
                <td >
                    <a class="btn btn-primary btn-sm" href="{{url('admin/role_user/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/role_user/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/role_user/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>

<div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        {{-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div> --}}
      </div>
    </div>
  </div>
@endsection
