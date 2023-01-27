@extends('client.layout.layout') @section('title', 'product index')
@section('content')
<style>
    .infor_customer{
        padding:25px 0;
    }
    .infor_customer h3{
        text-align: center;
    }
    .infor_customer button{
      border-color:#c89979;
      margin-left: 15px;
    }
    
    .span-alert{
       
       margin-left:0px;
      color: red;
     
   }
    .infor_customer .left h4{
        border: 1px solid #ddd;
        padding: 10px;
        color: black;
        font-size: 17px;
        margin-top: 5px;
    }
    .infor_customer .left h4 a{
        color: black;
    }
</style>
@if (session('success'))
<div class="thanhcong">
    {{ session('success') }}
</div>
@endif
<div class="container infor_customer">
 
    <div class="row">
        <h3>Thông tin người dùng</h3>
        <div class="col-3 left">
            <h4><a href="{{route('Taikhoan')}}">Thông tin người dùng</a></h4>
            <h4><a href="{{route('changePassIndex')}}">Thay đỗi mật khẩu</a></h4>
            <h4><a href="{{route('historyOrder')}}">Lịch sử mua hàng</a></h4>
        </div>
        <div class="col-9 ">
            <form class="show" action="{{ url('tai-khoan/postUpdate/'.Auth::guard("client")->user()->id)}}" method="post">
                {{ csrf_field() }}
                
                <div class="col-12 form-group">
                    <label for="txt-name">Họ và tên</label>
                    <input type="text" class="form-control" id="txt_name" name="name" placeholder="Name" value="{{Auth::guard("client")->user()->name}}">
                    <span class="span-alert" id="error_name">Không được để trống</span>
                    <span class="span-alert" id="error_checkname">Tên phải là chữ</span>
                </div>
                <div class="col-12 form-group">
                    <label for="txt-name">Email</label>
                    <input type="text" class="form-control" id="" name="email" placeholder="email" value="{{Auth::guard("client")->user()->email}}" disabled>
                    
                </div>
                <div class="col-12 form-group">
                    <label for="txt-name">Số điện thoại</label>
                    <input type="text" class="form-control" id="txt_phone" name="phone" placeholder="Phone" value="{{Auth::guard("client")->user()->phone}}">
                    <span class="span-alert" id="error_phone">Không được để trống</span>
                    <span class="span-alert" id="error_checkphone">Hãy nhập số điên thoại đầu số Việt Nam</span>
                </div>
                <div class="col-12  form-group">
                    <label for="txt-name">Địa chỉ</label>
                    <input type="text" class="form-control" id="txt_address" name="address" placeholder="Address" value="{{Auth::guard("client")->user()->address}}">
                    <span class="span-alert" id="error_address">Không được để trống</span>
                </div>
            
                    <button type="submit" id="dangKy" class="btn btn-primary">Lưu</button>
                </div>
            </form>
           
        </div>
    </div>
</div>
<script>
     var checkValidation = function (){
        var flag =  kiemtrarong('#txt_address','#error_address') ;
        // console(flag);
        //  //Kiểm tra sdt
        var flag1 =  kiemtrarong('#txt_phone','#error_phone') ;
        if(!flag1){  
            document.querySelector('#error_checkphone').style.display = "none";
        } else{
            flag &= kiemtrasdt('#txt_phone','#error_checkphone');
        }
          //Kiểm tra name
        var flag2 = kiemtrarong('#txt_name','#error_name') ;  
        if(!flag2){
            document.querySelector('#error_checkname').style.display = "none";
           
        }else{
            flag &= kiemtraten('#txt_name','#error_checkname');
        }
     
        flag &= flag1 & flag2 ;
       return Boolean(flag) ; //Cách 2 !!flag
    }

    function kiemtrasdt(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/;
        if(!regular.test(bientam)){
            document.querySelector(error).style.display = "block";
            document.querySelector(value).style.border = "1px solid red";
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
            return false;
        }else{
            document.querySelector(error).style.display = "none";
            document.querySelector(value).style.border = "";
            return true;
        }
    }
    function kiemtrarong(value,error){
        var bientam = document.querySelector(value).value;
        if(bientam === ""){
            document.querySelector(error).style.display="block";
            document.querySelector(value).style.border = "1px solid red";
            return false;
        }else{
           
            document.querySelector(error).style.display = "none";
            document.querySelector(value).style.border = "";
           
            return true;
        }
    }
    function kiemtraten(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/;
        if(!regular.test(bientam)){
            document.querySelector(error).style.display = "block";
            document.querySelector(value).style.border = "1px solid red";
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
            return false;
        }else{
            document.querySelector(error).style.display = "none";
            document.querySelector(value).style.border = "";
            return true;
        }
    }
    document.querySelector('#dangKy').onclick = checkValidation;
</script>
@endsection