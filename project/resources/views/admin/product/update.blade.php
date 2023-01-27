@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Cập nhật Đồng Hồ</h3>

        @php
        if(count($errors) > 0){
            echo "<p class='alert alert-danger'>Error: $errors[0]</p>";
        }
        @endphp
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ url('admin/product/postUpdate/'.$p->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
   
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Nhà sản xuất</label>
                <select name="supplier_id"  class="form-control"  >     
                     @foreach ($s as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Loại</label>
                <select name="type_id" id="" class="form-control">
                    @foreach ($t as $typeID)
                    <option value="{{$typeID->id}}">{{$typeID->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Tên</label>
                <input type="text" class="form-control" id="txt_name" name="name" placeholder="Input Name" value="{{$p->name}}">
                <span class="span-alert" id="error_name"></span>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Giá</label>
                <input type="text" class="form-control" id="txt_price" name="price" placeholder="Input Price" value="{{$p->price}}">
                <span class="span-alert" id="error_price"></span>
            </div>
            <div class="col-12 form-group">
                <label for="txt-name">Thông tin</label>
                <textarea type="text" class="form-control" id="txt_infor" name="information" placeholder="Input Information" value="{{$p->information}}">{{$p->information}}</textarea>
                <span class="span-alert" id="error_infor"></span>
            </div>
            <div class="col-12 form-group">
                <label for="txt-name">Miêu tả</label>
                <textarea type="text" class="form-control" id="txt_decript" name="descript" placeholder="Input Information" value="{{$p->descript}}">{{$p->descript}}</textarea>
                <span class="span-alert" id="error_decript"></span>
            </div>
        
            <div class="col-4 form-group">
                <label for="txt-name">Trạng thái</label>
                <select name="state" id="" class="form-control">                            
                    <option value="Còn hàng">Còn hàng</option> 
                    <option value="Hết hàng">Hết hàng</option>       
                </select>
            </div>
            <div class="col-4 form-group">
                <label for="txt-name">Ảnh chính</label>
                <input type="file" class="form-control" id="txt_img" name="image" placeholder="Input Image" value="{{$p->img}}">
                <span class="span-alert" id="error_img"></span> 
            </div>
            
            <div class="col-4 form-group">
                <label for="txt-name">Số lượng</label>
                <input type="text" class="form-control" id="txt_quantity" name="quantity" placeholder="Input Quantity" value="{{$p->quantity}}">
                <span class="span-alert" id="error_quantity"></span>
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
      
       var flag = kiemtrarong('#txt_name','#error_name') & kiemtrarongCKEDITOR('txt_infor','#error_infor') & kiemtrarongCKEDITOR('txt_decript','#error_decript')  ;
        var flag1 =  kiemtrarong('#txt_price','#error_price');
        flag &= flag1;
        if(flag1){
            flag &= kiemtralaso('#txt_price','#error_price');
        } 
        var flag2 = kiemtrarong('#txt_quantity','#error_quantity');
        flag &= flag2;
        if(flag2){
            flag &= kiemtraquantity('#txt_quantity','#error_quantity');
        } 
        
       return Boolean(flag) ; //Cách 2 !!flag
    }
    
    function kiemtraquantity(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[0-9]{1,4}$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Phải là số < 10000";
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
    function kiemtralaso(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[0-9]{6,9}$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Phải là số từ 100.000 đến 9.999.999.999";
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
    function kiemtraprice(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^\d+(.\d{3})*(\.\d{1,2})?$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Phải là số";
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
