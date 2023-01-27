@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Customer</h3>
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
    <form role="form" action="{{ url('admin/customer/postUpdate/'.$customer->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Tên</label>
                <input type="text" class="form-control" id="txt_name" name="name" placeholder="Username" value="{{$customer->name}}">
                <span class="span-alert" id="error_name"></span>  
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Email</label>
                <input type="text" class="form-control" id="txt_email" name="email" placeholder="Username" value="{{$customer->email}}">
                <span class="span-alert" id="error_email"></span>  
            </div>
            {{-- <div class="col-6 form-group">
                <label for="txt-name">Password</label>
                <input type="password" class="form-control" id="txt_password" name="password" placeholder="Password" value="{{$customer->password}}">
                <span class="span-alert" id="error_password"></span>  
            </div> --}}
            <div class="col-6 form-group">
                <label for="txt-name">SĐT</label>
                <input type="text" class="form-control" id="txt_phone" name="phone" placeholder="phone" value="{{$customer->phone}}">
                <span class="span-alert" id="error_phone"></span>  
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Địa chỉ</label>
                <input type="text" class="form-control" id="txt_address" name="address" placeholder="address" value="{{$customer->address}}">
                <span class="span-alert" id="error_address"></span>  
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
       var flag = kiemtrarong('#txt_address','#error_address') 
       & kiemtrarong('#txt_name','#error_name') ;
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
        //Kiểm tra sdt
        var flag3 = kiemtrarong('#txt_phone','#error_phone') ;  
        if(flag3){
            flag &= kiemtrasdt('#txt_phone','#error_phone');
        }
        flag &= flag1 & flag2 & flag3;
       return Boolean(flag) ; //Cách 2 !!flag
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

    function kiemtrasdt(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Hãy nhập số điên thoại đầu số Việt Nam";
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