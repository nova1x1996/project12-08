@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')



<div class="card">
    <div class="card-body">
        <h2 class="text-center">USER</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Add new User </button>
        </div>
        <table id="product" class="table">
            
            
            <thead>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
        
                <td >
                    <a class="btn btn-primary btn-sm" href="{{url('admin/user/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/user/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/user/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
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
            <form role="form" action="{{ url('admin/user/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="txt-name">Name</label>
                        <input type="text" class="form-control" id="txt_name" name="name" placeholder="Name">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <label for="txt-name">Email</label>
                        <input type="text" class="form-control" id="txt_email" name="email" placeholder="Email">
                        <span class="span-alert" id="error_email"></span>
                 
                    </div>
                    <div class="form-group">
                        <label for="txt-name">Password</label>
                        <input type="password" class="form-control" id="txt_password" name="password" placeholder="Password">
                        <span class="span-alert" id="error_password"></span>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id="dangKy" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div> --}}
      </div>
    </div>
  </div>
    {{-- JavaScript --}}
  <script>

    var checkValidation = function (){
        var flag = true;
         //Kiểm tra email
        var flag1 =  kiemtrarong('#txt_email','#error_email') ;
        if(flag1){  
            flag &= kiemtraemail('#txt_email','#error_email');
        } 
          //Kiểm tra name
        var flag2 = kiemtrarong('#txt_name','#error_name') ;  
        if(flag2){
            flag &= kiemtraten('#txt_name','#error_name');
        }
        //Kiểm tra pass
        var flag3 = kiemtrarong('#txt_password','#error_password') ;  
        if(flag3){
            flag &= kiemtrapass('#txt_password','#error_password');
        }
       flag &= flag1 & flag2 & flag3;
        console.log(flag);
       return Boolean(flag) ; 
    }

    function kiemtraten(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Tên phải là chữ";
            document.querySelector(value).style.border = "1px solid red";
      
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
            return true;
        }
    }

    function kiemtraemail(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Email chưa chính xác";
            document.querySelector(value).style.border = "1px solid red";
        
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
            return true;
        }
    }

    function kiemtrapass(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[A-Za-z0-9]\w{7,14}$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Mật khẩu phải từ 8 đến 16 ký tự";
            document.querySelector(value).style.border = "1px solid red";
           
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
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