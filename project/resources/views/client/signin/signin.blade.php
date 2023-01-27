@extends('client.layout.layout')
@section('title', 'product index')
@section('content')

<style>
    .alert {
    background-color: limegreen;
}

.notifi {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 17px;
    font-weight: bold;
    color: white;
    background-color: limegreen;
    border-color: limegreen;
}

    .span-alert{
        display: none;
        margin-left: 15px;
       color: red;
       font-size: 13px;
    }
    label{
        font-size: 17px;
    }
    button{
        border-color:1px solid #c89979;
    }
    section {
        padding: 60px 100px;
        background-color: rgba(221, 221, 221, 0.1);
    }
    
    .dksd p{
        line-height: 12px;
        font-size: 13px;
    }
</style>
@if(Session::has("success"))
<div class="notifi">
    {{Session::get("success")}}
</div>
@elseif(Session::has("error"))
<div class="canhbao">
    {{Session::get("error")}}
</div>
@endif

<section class="page-area pro-content">

    <div class="container">


        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="col-12">
                    <h3 class="heading login-heading text-center">ĐĂNG NHẬP</h3>
                </div>
             
                <div class="registration-process">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="notifi">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                   
                    <form class="form-validate-login"
                        action="{{route('clientLoginPost')}}" method="post">
                        @csrf
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Tên đăng nhập</label></div>
                            <div class="input-group col-12">
                                <input type="email" name="email" id="email"
                                    placeholder="Thông tin đăng nhập (email)"
                                    class="form-control email-validate-login">
                                <span class="form-text text-muted error-content" hidden>Thông tin đăng nhập
                                    </span>
                            </div>
                        </div>
                        <div class="from-group mb-4">
                            <div class="col-12"> <label for="inlineFormInputGroup">Mật khẩu</label></div>
                            <div class="input-group col-12">
                                <input type="password" name="password" id="password-login" placeholder=""
                                    class="form-control password-login">
                                <span class="form-text text-muted error-content" hidden>Bắt buộc.</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 text-center">
                            <input type="submit" value="Đăng nhập" class="wpcf7-form-control wpcf7-submit form_dang_ky" id="btn-gui">
                            
                            <a href="{{route('customer.forgetPass')}}" style="color:#076db6">Quên mật khẩu</a>
                        </div>
                    </form>
                    <div class="row">
                        <a href="{{url('/google')}}" style="width:50%;margin-left:25%"class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                    </div>
     
                </div>
            
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="col-12">
                    <h3 class="heading login-heading text-center">TẠO TÀI KHOẢN</h3>
                </div>
                <div class="registration-process">


                    <form name="signup" enctype="multipart/form-data" class="form-validate"
                        action="{{ url('signin/postCreate') }}" method="post">
                        {{ csrf_field() }}

                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Họ và tên</label></div>
                            <div class="input-group col-12">
                                <input name="name" type="text" class="form-control field-validate" id="txt_name"
                                    placeholder="Họ và tên" value="">
                                    
                            </div>
                            <span class="span-alert" id="error_name">Không được để trống</span>
                            <span class="span-alert" id="error_checkname">Tên phải là chữ</span>
                        </div>

                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Email</label></div>
                            <div class="input-group col-12 date">
                                <input name="email" type="email" class="form-control customers_dob"
                                    data-provide="datepicker" id="txt_email" placeholder="" value="">
                                    
                            </div>
                            <span class="span-alert" id="error_email">Không được để trống</span>
                            <span class="span-alert" id="error_email1">Email không đúng</span>
                        </div>

                       
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Mật khẩu</label></div>
                            <div class="input-group col-12">
                                <input name="password" id="txt_password" type="password" class="form-control password"
                                    placeholder="Mật khẩu">
                                   

                            </div>
                            <span class="span-alert" id="error_password1">Mật khẩu phải từ 8 đến 16 ký tự và không có ký tự đặc biệt</span>
                            <span class="span-alert" id="error_password">Không được để trống</span>
                        </div>
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Nhập lại mật khẩu</label></div>
                            <div class="input-group col-12">
                                <input type="password" class="form-control password" id="re_password"
                                    name="re_password" placeholder="Nhập lại mật khẩu">
                            
                            </div>
                            <span class="span-alert" id="error_checkpassword">Không được để trống</span>
                            <span class="span-alert" id="error_checkpassword1">Nhập lại mật khẩu không trùng khớp</span>
                        </div>
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Địa chỉ</label></div>
                            <div class="input-group col-12">
                                <input name="address" type="text" class="form-control email-validate"
                                    id="txt_address" placeholder="Địa chỉ" value="">
                                   
                            </div>
                            <span class="span-alert" id="error_address">Không được để trống</span>
                        </div>
                       
                       
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup">Điện thoại</label></div>
                            <div class="input-group col-12">
                                <input name="phone" type="text" class="form-control phone-validate" id="txt_phone"
                                    placeholder="Số điện thoại" value="">
                                    
                            </div>
                            <span class="span-alert" id="error_phone">Không được để trống</span>
                            <span class="span-alert" id="error_checkphone">Hãy nhập số điên thoại đầu số Việt Nam</span>
                        </div>
                        <div class="from-group mb-1">
                            <div class="dksd col-12 d-flex">
                                <input required style="margin-right:10px;" class="form-controlt checkbox-validate"
                                    type="checkbox">
                                    <p> Đăng ký tài khoản với điều khoản sử dụng, điều khoản bảo mật.</p>
                                   
                            
                               
                                <span class="form-text text-muted error-content" hidden>Vui lòng nhập điều khoản sử
                                    dụng</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 text-center mt-3">
                            <input type="submit" value="Tạo tài khoản" class="wpcf7-form-control wpcf7-submit form_dang_ky" id="dangKy">

                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

<script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt_address','#error_address') ;
         //Kiểm tra sdt
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

        //Kiểm tra xác nhận mk
        var flag3 = kiemtrarong('#re_password','#error_checkpassword');
        if(!flag3){
            document.querySelector('#error_checkpassword1').style.display = "none";
           
        }else{
            flag &= checkpassword('#re_password','#txt_password','#error_checkpassword1');
        }
      
        //Kiểm tra Pass 
      
        var flag4 = kiemtrarong('#txt_password','#error_password');
        if(!flag4){
            document.querySelector('#error_password1').style.display = "none"; 
        }else{
            flag &= kiemtrapass('#txt_password','#error_password1');
        }
        //Email
        var flag5 = kiemtrarong('#txt_email','#error_email'); 
        if(!flag5){
            document.querySelector('#error_email1').style.display = "none";
           
        }else{
            flag &= kiemtraemail('#txt_email','#error_email1');
        }

        flag &= flag1 & flag2 & flag3 & flag4 & flag5;
        return Boolean(flag) ; //Cách 2 !!flag
    }

    function kiemtraemail(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if(!regular.test(bientam)){
            document.querySelector(error).style.display = "block";
            document.querySelector(value).style.border = "1px solid red";
     
            return false;
        }else{
            document.querySelector(error).style.display = "none";
            document.querySelector(value).style.border = "";
            return true;
        }
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
    
    function kiemtrasdt(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/;
        if(!regular.test(bientam)){
            document.querySelector(error).style.display = "block";
            document.querySelector(value).style.border = "1px solid red";
      
            return false;
        }else{
            document.querySelector(error).style.display = "none";
            document.querySelector(value).style.border = "";
            return true;
        }
    }

    function kiemtrapass(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[A-Za-z0-9]\w{7,14}$/;
        if(!regular.test(bientam)){
            document.querySelector(error).style.display = "block";
            document.querySelector(value).style.border = "1px solid red";
     
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

    document.querySelector('#dangKy').onclick = checkValidation;
</script>
@endsection