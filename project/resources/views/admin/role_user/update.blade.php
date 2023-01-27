


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Role User</h3>
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
    <form role="form" action="{{ url('admin/role_user/postUpdate/'.$role_user->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Role</label>
                <select name="role_id"  class="form-control"  >
                     @foreach ($role as $supID)
                     @if ($supID->id === $role_user->role->id)
                     <option  value="{{$supID->id}}" selected>{{$supID->name}}</option>
                     @else
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endif
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">User</label>
                <select name="user_id" id="" class="form-control">
                    @foreach ($user as $supID)
                    @if ($supID->id === $role_user->user->id)
                    <option  value="{{$supID->id}}" selected>{{$supID->name}}</option>
                    @else
                   <option value="{{$supID->id}}">{{$supID->name}}</option>
                   @endif
                   @endforeach 
                </select>
            </div>
           
    
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection