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
        <h2 class="text-center ">Đơn Hàng</h2>
        {{-- <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Create Order </button>
        </div> --}}

        <table id="product" class="table ">
          
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                     
                <th>Hình Thức</th>
                <th>Trạng Thái</th>
                <th>Giao Hàng</th>
                <th>Người Dùng</th>
                <th>Tổng Tiền</th>
                
                
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                
                
                {{-- Payment --}}
                @if($item->payment == 0)
                <td class="text-success">COD</td>
                @else
                <td class="text-danger">Banking</td>
                @endif
                {{-- Stauts --}}
                @if($item->status == 0)
                <td class="text-danger">Chưa thanh toán</td>
                @else
                <td class="text-success">Đã thanh toán</td>
                @endif
                {{--Ship--}}
                @if($item->ship == 0)
                <td class="text-danger">Chưa giao</td>
                @elseif($item->ship == 1)
                <td class="text-success">Đã giao</td>
                @endif
                

                {{-- Customer --}}
                @if(!$item->customer)
                <td class="text-danger">Khách</td>
                @else   
                <td class="text-success">{{$item->customer->name}}</td>     
                 @endif
                 <td>{{number_format($item->total)}} đ</td>
                 {{-- Action --}}
                <td class="">
                    <a class="btn btn-primary btn-sm" href="{{url('admin/order/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/order/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Sửa
                    </a>
                
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>

<!-- Modal Create-->

{{-- <div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/order/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                   
                    <div class="col-6 form-group">
                        <label for="txt-name">Customer</label>
                        <select name="customer_id" id="" class="form-control">
                            @foreach ($cus as $cusID)
                            <option value="{{$cusID->id}}">{{$cusID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Name</label>
                        <input type="text" class="form-control" id="txt_name" name="name" placeholder="Name">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Address</label>
                        <input type="text" class="form-control" id="txt_address" name="address" placeholder="Address">
                        <span class="span-alert" id="error_address"></span>
                    </div>
                   
                    <div class="col-6 form-group">
                        <label for="txt-name">Phone</label>
                        <input type="text" class="form-control" id="txt_phone" name="phone" placeholder="Phone">
                        <span class="span-alert" id="error_phone"></span>
                    </div>
                   
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id="dangKy" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
      
      </div>
    </div>
  </div>

  <script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt_address','#error_address') 
       & kiemtrarong('#txt_country','#error_country') ;
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
</script> --}}
@endsection
