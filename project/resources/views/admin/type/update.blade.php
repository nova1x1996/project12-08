@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')



<div class="card">
   
        
   
    <div class="card-body">
        <h3 class="card-title">Cập nhật Loại Đồng Hồ</h3>
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
    <form role="form" action="{{ url('admin/type/postUpdate/'.$s->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group ">
                <label for="txt-name">ID</label>
                <input type="text" class="form-control" id="txt-id" name="id" placeholder="Input Supplier Name"  value="{{$s->id}}" readonly>
            </div>
            <div class="form-group">
                <label for="txt-name">Tên loại</label>
                <input type="text" class="form-control" id="txt-name" name="nameinput" placeholder="Input Supplier Name" value="{{$s->name}}">
                <span class="span-alert" id="error_name"></span>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" id="dangKy"class="btn btn-primary ">Xác nhận</button>
        </div>
    </form>
    
    
</div>
<script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt-name','#error_name') ;
        return flag;
    }

    function kiemtrarong(value,error){
        var bientam = document.querySelector(value).value;
        if(bientam === ""){
            document.querySelector(error).innerHTML = "Không được để trống";
            document.querySelector(value).style.border = "1px solid red";
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
            return true;
        }
    }

    document.querySelector('#dangKy').onclick = checkValidation;
</script>
@endsection