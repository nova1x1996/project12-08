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
        <h2 class="text-center">Người Dùng</h2>
        <div class="d-flex justify-content-end mb-2">
            {{-- <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Tạo mới </button> --}}
        </div>

        
<table id="product" class="table ">
    
    
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>Địa chỉ</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($customers as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
       
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>    
        <td >
            <a class="btn btn-primary btn-sm" href="{{url('admin/customer/view/'.$item->id)}}">
                <i class="fas fa-folder"></i> Xem
            </a>
            <a class="btn btn-info btn-sm" href="{{url('admin/customer/update/'.$item->id)}}">
                <i class="fas fa-pencil-alt"></i> Sửa
            </a>
          
            <a class="btn btn-danger btn-sm" href="{{url('admin/customer/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
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
          <h5 class="modal-title" id="staticBackdropLabel">Create Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/customer/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
               
                    <div class="col-6 form-group">
                        <label for="txt-name">Tên</label>
                        <input type="text" class="form-control" id="txt_name" name="name" placeholder="Name">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Email</label>
                        <input type="text" class="form-control" id="txt_email" name="email" placeholder="email">
                        <span class="span-alert" id="error_email"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Mật khẩu</label>
                        <input type="password" class="form-control" id="txt_password" name="password" placeholder="Password">
                        <span class="span-alert" id="error_password"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">SĐT</label>
                        <input type="text" class="form-control" id="txt_phone" name="phone" placeholder="Phone">
                        <span class="span-alert" id="error_phone"></span>
                    </div>
                    <div class="col-12 form-group">
                        <label for="txt-name">Địa chỉ</label>
                        <input type="text" class="form-control" id="txt_address" name="address" placeholder="Address">
                        <span class="span-alert" id="error_address"></span>
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

    var checkValidation = function (){
       var flag =  kiemtrarong('#txt_address','#error_address') ;
         //Kiểm tra sdt
        var flag1 =  kiemtrarong('#txt_phone','#error_phone') ;
        if(flag1){  
            flag &= kiemtrasdt('#txt_phone','#error_phone');
        } 
          //Kiểm tra name
        var flag2 = kiemtrarong('#txt_name','#error_name') ;  
        if(flag2){
            flag &= kiemtraten('#txt_name','#error_name');
        }
        //Kiểm tra password
        var flag3 = kiemtrarong('#txt_password','#error_password');
        if(flag3){
            flag &= kiemtrapass('#txt_password','#error_password');
        }

        var flag4 = kiemtrarong('#txt_email','#error_email');
        if(flag4){
           flag &= kiemtraemail('#txt_email','#error_email');
        }
        flag &= flag1 & flag2 & flag3 & flag4;
       return Boolean(flag) ; //Cách 2 !!flag
    }

    function kiemtraten(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Tên phải là chữ";
            document.querySelector(value).style.border = "1px solid red";
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
            return true;
        }
    }
    
    function kiemtrasdt(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Hãy nhập số điên thoại đầu số Việt Nam";
            document.querySelector(value).style.border = "1px solid red";
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
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
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
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
