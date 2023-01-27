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
    .div-input{
        width: 100%;
    }
    #dangKy{
        margin-left:25%;
    margin-top:20px;
    width:50%;
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
           
                
              
            <div class="col-12 col-sm-12 col-md-12">
                <div class="col-12">
                    <h3 class="heading login-heading text-center">Lấy lại mật khẩu</h3>
                </div>
                <div class="registration-process">


                    <form name="signup" enctype="multipart/form-data" class="form-validate"
                        action="{{ url('post-forget-password') }}" method="post">
                        {{ csrf_field() }}

                        <div class="from-group mb-3">
                           
                            <div class="col-12">
                                <div >Vui lòng nhập email mà bạn đã đăng ký trong hệ thống của chúng tôi</div>
                                <label for="inlineFormInputGroup">Email</label></div>
                            <div class="input-group col-12 date">
                                <input name="email" type="email" class="form-control customers_dob"
                                    data-provide="datepicker" id="txt_email" placeholder="" value="">
                                    
                            </div>
                            <span class="span-alert" id="error_email">Không được để trống</span>
                            <span class="span-alert" id="error_email1">Email không đúng</span>
                            <div class="div-input">      <input type="submit" value="Gửi email xác nhận" class="wpcf7-form-control wpcf7-submit form_dang_ky" id="dangKy"></div>
                      
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

<script>

    var checkValidation = function (){
        var flag = true;
        //Email
        var flag5 = kiemtrarong('#txt_email','#error_email'); 
        if(!flag5){
            document.querySelector('#error_email1').style.display = "none";
           
        }else{
            flag &= kiemtraemail('#txt_email','#error_email1');
        }

         flag &=  flag5;
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