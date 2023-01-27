



@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Cập nhật Blog</h3>
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
    <form role="form" action="{{ url('admin/new/postUpdate/'.$new->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Quản trị</label>
                <select name="user_id"  class="form-control"  >     
                     @foreach ($user as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            
            <div class="col-6 form-group">
                <label for="txt-name">Tiêu đề</label>
                <input type="text" class="form-control" id="txt_title" name="title" placeholder="Title" value="{{$new->title}}">
                <span class="span-alert" id="error_title"></span>
            </div>

            <div class="col-6 form-group">
                <label for="txt-name">Hình ảnh</label>
                <input type="file" class="form-control" id="txt_img" name="img" placeholder="Upload Image">   
                <span class="span-alert" id="error_img"></span>
            </div>

            <div class="col-6 form-group">
                <label for="txt-name">Tác giả</label>
                <input type="text" class="form-control" id="txt_author" name="author" placeholder="Author" value="{{$new->author}}">
                <span class="span-alert" id="error_author"></span>
            </div>

            <div class="col-13 form-group">
                <label for="txt-name">Nội dung</label>
                <textarea type="text" class="form-control" id="txt_content" name="blogcontent" placeholder="Content" value="{{$new->blogcontent}}">{{$new->blogcontent}}</textarea>
                <span class="span-alert" id="error_content"></span>
            </div>
    
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" id="dangKy"class="btn btn-primary ">Xác nhận</button>
        </div>
    </form>
    
    
</div>
<script>

    var checkValidation = function (e){
      
       var flag = kiemtrarong('#txt_title','#error_title') & kiemtrarongCKEDITOR('txt_content','#error_content')
        & kiemtrarong('#txt_img','#error_img') & kiemtrarong('#txt_author','#error_author');
       
    
      return Boolean(flag);
    //    return Boolean(flag) ; //Cách 2 !!flag
    }
    
    

 function kiemtrarongCKEDITOR(value,error){
        var bientam = CKEDITOR.instances[value].getData();
        if(bientam === ""){
            document.querySelector(error).innerHTML = "Không được để trống";
           
            return false;
        }else{
           
            document.querySelector(error).innerHTML = "";
      
           
            return true;
        }
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