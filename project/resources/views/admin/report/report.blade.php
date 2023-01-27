@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Phản hồi khách hàng {{$rp->email}}</h3>
        {{-- @if(session('errors1'))
            <div>
                {{session('errors1')}}
            </div>
            @endif --}}
    
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('ReportReply')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group" style="display:none;">
                <label for="txt-name">Email</label>
                <input type="text" class="form-control" id="txt-name" name="email" value="{{$rp->email}}" >
            </div>
            <div class="col-6 form-group" style="display:none;">
                <label for="txt-name">ID</label>
                <input type="text" class="form-control" id="txt-name" name="id" value="{{$rp->id}}" >
            </div>
            <div class="col-6 form-group" style="display:none;">
                <label for="txt-name">Tên</label>
                <input type="text" class="form-control" id="txt-name" name="name"  value="{{$rp->name}}" >
            </div>
                <label for="txt-name">Nội dung</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>      
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Xác nhận</button>
        </div>
    </form>
    
    
</div>
@endsection