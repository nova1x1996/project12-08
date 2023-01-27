


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Role</h3>
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
    <form role="form" action="{{ url('admin/role/postUpdate/'.$role->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group ">
                <label for="txt-name">Name</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Name"  value="{{$role->name}}" >
            </div>
            <div class="form-group">
                <label for="txt-name">Slug</label>
                <input type="text" class="form-control" id="txt-name" name="slug" placeholder="Slug" value="{{$role->slug}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection