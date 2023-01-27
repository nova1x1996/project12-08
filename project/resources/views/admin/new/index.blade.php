
@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')



<div class="card">
    @if (session('error'))
<div class="canhbao">
    {{ session('error') }}
</div>
@elseif(session('success'))
<div class="thanhcong">
    {{ session('success') }}
</div>
@endif
    <div class="card-body">
        <h2 class="text-center">Blog</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Tạo mới </button>

        </div>

        <table id="product" class="table">
         
            
            <thead>
            <tr>
               
                <th>ID Quản Trị</th>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Ảnh bìa</th>
                <th width="250px;">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($new as $item)
            <tr>
                
                <td>{{$item->user_id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td><img src="{{asset($item->img)}}"></td>
                <td >
                    <a class="btn btn-primary btn-sm" href="{{url('admin/new/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/new/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/new/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>
<!-- Modal Create-->
<div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create News</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/new/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                    <div class="col-6 form-group">
                        <label for="txt-name">Quản Trị</label>
                        <select name="user_id" id="" class="form-control">
                            @foreach ($user as $customerID)
                            <option value="{{$customerID->id}}">{{$customerID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-6 form-group">
                        <label for="txt-name">Tiêu đề</label>
                        <input type="text" class="form-control" id="txt_title" name="title" placeholder="Title">
                        <span class="span-alert" id="error_title"></span>
                    </div>

                    <div class="col-6 form-group">
                        <label for="txt-name">Hình</label>
                        <input type="file" class="form-control" id="txt_img" name="img" placeholder="Upload Image">
                        <span class="span-alert" id="error_img"></span>    
                    </div>

                    <div class="col-6 form-group">
                        <label for="txt-name">Tác giả</label>
                        <input type="text" class="form-control" id="txt_author" name="author" placeholder="Author">
                        <span class="span-alert" id="error_author"></span>
                    </div>
                    
                    <div class="col-12 form-group">
                        <label for="txt-name">Nội dung</label>
                        <textarea type="text" class="form-control" id="txt_content" name="blogcontent" placeholder="Input Content"></textarea>
                        <span class="span-alert" id="error_content"></span>
                    </div>
    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id="dangKy" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div> --}}
      </div>
    </div>
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




