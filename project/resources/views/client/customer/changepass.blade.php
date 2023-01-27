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
        margin-left: 0px;
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
@if (session('error'))
<div class="canhbao">
    {{ session('error') }}
</div>
@elseif(session('success'))
<div class="thanhcong">
    {{ session('success') }}
</div>
@endif
<div class="container infor_customer">
    
    <div class="row">
        <h3>Thông tin người dùng</h3>
        <div class="col-3 left" >
            <h4><a href="{{route('Taikhoan')}}">Thông tin người dùng</a></h4>
            <h4><a href="{{route('changePassIndex')}}">Thay đỗi mật khẩu</a></h4>
            <h4><a href="{{route('historyOrder')}}">Lịch sử mua hàng</a></h4>
        </div>
        <div class="col-9 ">
            <form class="show" action="{{ url('tai-khoan/postChangePass/'.Auth::guard("client")->user()->id)}}" method="post">
                {{ csrf_field() }}
          
            
            
              <div class="col-12 form-group passcu">
                <label for="txt-name">Mật khẩu hiện tại</label>
                <input type="password" class="form-control" id="txt_passold" name="passwordOld" placeholder="" value="" >
                <span class="span-alert" id="error_passold">Không được để trống</span>
            </div>
             
               
                <div class="col-12 form-group">
                    <label for="txt-name">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="txt_passnew" name="passwordNew" placeholder="" value="">
                    <span class="span-alert" id="error_passnew">Không được để trống</span>
                    <span class="span-alert" id="error_passnew1">Mật khẩu phải từ 8 đến 16 ký tự và không có ký tự đặc biệt</span>
                    <span class="span-alert" id="error_passnew2">Mật khẩu mới không được trùng mật khẩu cũ</span>
                </div>
                <div class="col-12 form-group">
                    <label for="txt-name">Xác nhận mật khẩu mới</label>
                    <input type="password" class="form-control" id="re_password" name="re_password" placeholder="" value="">
                    <span class="span-alert" id="error_checkpassword">Không được để trống</span>
                    <span class="span-alert" id="error_checkpassword1">Xác nhận mật khẩu mới phải giống mật khẩu củ</span>
                </div>
               
            
                    <button type="submit" id="dangKy" class="btn btn-primary">Lưu</button>
                </div>
            </form>
           
        </div>
    </div>
</div>

<script>
     var checkValidation = function (){
        
       var flag =    kiemtrarong('#txt_passold','#error_passold') ;
        //Kiểm tra password
        
        var flag3 = kiemtrarong('#txt_passnew','#error_passnew');
        if(!flag3){
            document.querySelector('#error_passnew1').style.display = "none";
            
        }else{
            flag &= kiemtrapass('#txt_passnew','#error_passnew1');
        }

        var flag2 = kiemtrarong('#re_password','#error_checkpassword');
        if(!flag2){
            document.querySelector('#error_checkpassword1').style.display = "none";
           
        }else{
            flag &= checkpassword('#re_password','#txt_passnew','#error_checkpassword1');
        }


        var flag1 = kiemtrarong('#txt_passnew','#error_passnew');
        if(!flag1){
            document.querySelector('#error_passnew2').style.display = "none";
           
        }else{
            flag &= checkpasswordcu('#txt_passnew','#txt_passold','#error_passnew2');
        }
        
        flag &= flag3 & flag2 & flag1;
       return Boolean(flag) ; //Cách 2 !!flag
    }

    function checkpassword(value1,value2,error){
        var bientam = document.querySelector(value1).value;
        var bientam2 = document.querySelector(value2).value;
        if(bientam != bientam2){
            document.querySelector(error).style.display = "block";
            document.querySelector(value1).style.border = "1px solid red"; 
            return false;
        }else{
            document.querySelector(error).style.display = "none";
            document.querySelector(value1).style.border = "";
            return true;
        }
    }
    function checkpasswordcu(value1,value2,error){
        var bientam = document.querySelector(value1).value;
        var bientam2 = document.querySelector(value2).value;
        if(bientam == bientam2){
            document.querySelector(error).style.display = "block";
            document.querySelector(value1).style.border = "1px solid red"; 
            return false;
        }else{
            document.querySelector(error).style.display = "none";
            document.querySelector(value1).style.border = "";
            return true;
        }
    }
    function kiemtrapass(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[A-Za-z0-9]\w{7,14}$/;
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
            console.log("Hello");
            document.querySelector(error).style.display="block";
            document.querySelector(value).style.border = "1px solid red";
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