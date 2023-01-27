@extends('client.layout.layout') @section('title', 'product index')
@section('content')
<main id="main" class="">

    @if (session('error'))
<div class="canhbao">
    {{ session('error') }}
</div>
@elseif(session('success'))
<div class="thanhcong">
    {{ session('success') }}
</div>
@endif

    @if(Session::has('cart'))
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">



                    <div class="woocommerce">
                        <div class="woocommerce-form-login-toggle">

                            <div class="woocommerce-info message-wrapper">
                                <div class="message-container container medium-text-center">
                                    Bạn đã có tài khoản? <a href="#" class="showlogin">Ấn vào đây để đăng nhập</a>
                                </div>
                            </div>
                        </div>

                        <div class="woocommerce-form-coupon-toggle">

                            <div class="woocommerce-info message-wrapper">
                                <div class="message-container container medium-text-center">
                                    Bạn có mã ưu đãi? <a href="#" class="showcoupon">Ấn vào đây để nhập mã</a> </div>
                            </div>
                        </div>


                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout "
                            action="{{ url('order/postCreate') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row pt-0 ">
                                <div class="larger-7 col">
                                    <h3 class="text-center">Thông tin thanh toán</h3>
                                    @if (Auth::guard('client')->check())
                                    <div class="from-group mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup">Name</label>
                                        </div>
                                        <div class="input-group col-12 date">
                                            <input name="name" type="text" class="form-control customers_dob"
                                                data-provide="datepicker" id="txt_name" placeholder="" value="{{Auth::guard('client')->user()->name}}">

                                        </div>
                                        <span class="span-alert" id="error_name">Không được để trống</span>
                                        <span class="span-alert" id="error_checkname">Tên phải là chữ</span>
                                    </div>
                                    <div class="from-group mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup">Address</label>
                                        </div>
                                        <div class="input-group col-12 date">
                                            <input name="address" type="text" class="form-control customers_dob"
                                                data-provide="datepicker" id="txt_address" placeholder="" value="{{Auth::guard('client')->user()->address}}">

                                        </div>
                                        <span class="span-alert" id="error_address">Không được để trống</span>
                                    </div>
                                    <div class="from-group mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup">Phone</label>
                                        </div>
                                        <div class="input-group col-12 date">
                                            <input name="phone" type="text" class="form-control customers_dob"
                                                data-provide="datepicker" id="txt_phone" placeholder="" value="{{Auth::guard('client')->user()->phone}}">

                                        </div>
                                        <span class="span-alert" id="error_phone">Không được để trống</span>
                                        <span class="span-alert" id="error_checkphone">Hãy nhập số điên thoại đầu số Việt Nam</span>
                                    </div>
                                    @else
                                    <div class="from-group mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup">Họ và tên</label>
                                        </div>
                                        <div class="input-group col-12 date">
                                            <input name="name" type="text" class="form-control customers_dob"
                                                data-provide="datepicker" id="txt_name" placeholder="" value="">
                                               
                                        </div>
                                        <span class="span-alert" id="error_name">Không được để trống</span>
                                        <span class="span-alert" id="error_checkname">Tên phải là chữ</span>
                                    </div>
                                    <div class="from-group mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup">Địa chỉ</label>
                                        </div>
                                        <div class="input-group col-12 date">
                                            <input name="address" type="text" class="form-control customers_dob"
                                                data-provide="datepicker" id="txt_address" placeholder="" value="">
                                               
                                        </div>
                                        <span class="span-alert" id="error_address">Không được để trống</span>
                                    </div>
                                    <div class="from-group mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup">Điện thoại</label>
                                        </div>
                                        <div class="input-group col-12 date">
                                            <input name="phone" type="text" class="form-control customers_dob"
                                                data-provide="datepicker" id="txt_phone" placeholder="" value="">
                                                
                                        </div>
                                        <span class="span-alert" id="error_phone">Không được để trống</span>
                                        <span class="span-alert" id="error_checkphone">Hãy nhập số điên thoại đầu số Việt Nam</span>
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="large-5 col">

                                    <div class="col-inner has-border">
                                        <div class="checkout-sidebar sm-touch-scroll">
                                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>


                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Tổng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> @foreach($product_cart as $cart)

                                                        <tr class="cart_item">
                                                          
                                                            <td class="product-name">
                                                                {{$cart['item']['name']}}&nbsp; <strong
                                                                    class="product-quantity">&times;
                                                                    {{$cart['qty']}}</strong> </td>
                                                            <td class="product-total">
                                                                <span
                                                                    class="woocommerce-Price-amount amount">{{number_format($cart['item']['price']*$cart['qty'])}}&nbsp;<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>

                                                    





                                                        <tr class="woocommerce-shipping-totals shipping">
                                                            <td class="shipping__inner" colspan="2">
                                                                <table class="shipping__table ">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Giao hàng</th>
                                                                            <td data-title="Giao hàng">
                                                                                <ul id="shipping_method"
                                                                                    class="shipping__list woocommerce-shipping-methods">
                                                                                    <li class="shipping__list_item">
                                                                                        <input type="hidden"
                                                                                            name="shipping_method[0]"
                                                                                            data-index="0"
                                                                                            id="shipping_method_0_free_shipping1"
                                                                                            value="free_shipping:1"
                                                                                            class="shipping_method" /><label
                                                                                            class="shipping__list_label"
                                                                                            for="shipping_method_0_free_shipping1">Giao
                                                                                            hàng miễn phí</label>
                                                                                    </li>
                                                                                </ul>


                                                                            </td>
                                                                    </tbody>
                                                        </tr>
                                                </table>
                                                </td>
                                                </tr>





                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td><strong><span
                                                                class="woocommerce-Price-amount amount">{{number_format(Session('cart')->totalPrice)}}&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong>
                                                    </td>
                                                </tr>
                                               
                                                {{-- Nếu như giỏ hàng có mã giảm giá thì hiện dòng này --}}
                                                @if (Session('cart')->discount)
                                                <tr class="woocommerce-shipping-totals shipping">
                                                    <th>Ưu đãi</th>
                                                    <td><strong><span
                                                                class="woocommerce-Price-amount amount">{{Session('cart')->discount['name']}}%<span
                                                                    class="woocommerce-Price-currencySymbol"></span></span></strong>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td><strong><span 
                                                                class="woocommerce-Price-amount amount">{{number_format((Session('cart')->totalPrice)-((Session('cart')->totalPrice)*(Session('cart')->discount['name'])/100))}}&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong>
                                                    </td>
                                                </tr>
                                                @endif

                                                </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input id="payment_method_cod" type="radio"
                                                                class="input-radio" name="payment" value="0"
                                                                checked='checked' data-order_button_text="" />

                                                            <label for="payment_method_cod">
                                                                Trả tiền mặt khi nhận hàng </label>
                                                            <div class="payment_box payment_method_cod">
                                                                <p>Trả tiền mặt khi giao hàng.</p>
                                                            </div>
                                                        </li>
                                                        <li class="wc_payment_method payment_method_bacs">
                                                            <input id="payment_method_bacs" type="radio"
                                                                class="input-radio" name="payment" value="1"
                                                                data-order_button_text="" />

                                                            <label for="payment_method_bacs">
                                                                Chuyển khoản ngân hàng </label>
                                                            <div class="payment_box payment_method_bacs"
                                                                style="display:none;">
                                                                <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của
                                                                    chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn
                                                                    trong phần Nội dung thanh toán. Đơn hàng sẽ đươc
                                                                    giao sau khi tiền đã chuyển.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <noscript>
                                                            Since your browser does not support JavaScript, or it is
                                                            disabled, please ensure you click the &lt;em&gt;Update
                                                            Totals&lt;/em&gt; button before placing your order. You may
                                                            be charged more than the amount stated above if you fail to
                                                            do so. <br /><button type="submit" class="button alt"
                                                                name="woocommerce_checkout_update_totals"
                                                                value="Cập nhật tổng">Cập nhật tổng</button>
                                                        </noscript>

                                                        <div class="woocommerce-terms-and-conditions-wrapper">

                                                        </div>
                                                       

                                                        <button type="submit" class="button alt"
                                                            name="woocommerce_checkout_place_order" id="dangKy"
                                                            value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                                    
                                                        
                                                        <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                            name="woocommerce-process-checkout-nonce"
                                                            value="4484216e24" /><input type="hidden"
                                                            name="_wp_http_referer"
                                                            value="/donghohaitrieu/thanh-toan/" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="woocommerce-privacy-policy-text"></div>
                                        </div>
                                    </div>

                                </div><!-- large-5 -->

                            </div><!-- row -->
                        </form>
                        <div class="div">
                         
                        </div>
                    </div>


                </div><!-- .col-inner -->
            </div><!-- .large-12 -->
        </div><!-- .row -->
    </div>

    @else
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">



                    <div class="woocommerce">
                        <div class="text-center pt pb">
                            <div class="woocommerce-notices-wrapper"></div>
                            <p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>
                            <p class="return-to-shop">
                                <a class="button primary wc-backward"
                                    href="http://mauweb.monamedia.net/donghohaitrieu/cua-hang/">
                                    Quay trở lại cửa hàng </a>
                            </p>
                        </div>
                    </div>


                </div><!-- .col-inner -->
            </div><!-- .large-12 -->
        </div><!-- .row -->
    </div>

    @endif
</main><!-- #main -->
<script>

    var checkValidation = function (e){
       var flag =  kiemtrarong('#txt_address','#error_address') ;
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

        
        flag &= flag1 & flag2  ;
     
        
       return Boolean(flag) ; //Cách 2 !!flag
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
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
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

    document.querySelector('#dangKy').onclick = checkValidation;
</script>
@endsection