@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
    @if (session('error'))
    <div class="canhbao">
        {{ session('error') }}
    </div>
    @endif
    <div class="card-body">
        <h3 class="card-title">Cập nhật NSX</h3>
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
    <form role="form" action="{{ url('admin/supplier/postUpdate/'.$sup->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Tên</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Name" value="{{$sup->name}}">
                <span class="span-alert" id="error_name"></span>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Logo</label>
                <input type="file" class="form-control" id="txt-name" name="img" placeholder="Input Image" value="{{$sup->logo}}">
                <span class="span-alert" id="error_img"></span>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" id="dangKy" class="btn btn-primary ">Xác nhận</button>
        </div>
    </form>
    
    
</div>

   

<script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt-name','#error_name') && kiemtrarong('#txt-img','#error_img');
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