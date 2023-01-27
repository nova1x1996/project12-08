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
        <h2 class="text-center">Bình luận</h2>
        <div class="d-flex justify-content-end mb-2">
            {{-- <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Tạo mới</button> --}}
        </div>

        <table id="product" class="table">
          
            
            <thead>
            <tr>
                <th>Id</th>
                <th>Điểm</th>
                <th>Nội dung</th>
               
                
                <th>Khách hàng</th>
                <th>Đồng Hồ</th>
                <th>Ngày</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($fb as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->rating}}</td>
                <td>{{$item->content}}</td>
                
                <td>{{$item->customer->name}}</td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->created_at}}</td>
                <td >
                    {{-- <a class="btn btn-primary btn-sm" href="{{url('admin/feedback/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a> --}}
                    <a class="btn btn-danger btn-sm" href="{{url('admin/feedback/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Xóa
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
          <h5 class="modal-title" id="staticBackdropLabel">Tạo mới Bình Luận</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/feedback/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                    <div class="col-6 form-group">
                        <label for="txt-name">Khách hàng</label>
                        <select name="customer_id" id="" class="form-control">
                            @foreach ($customer as $customerID)
                            <option value="{{$customerID->id}}">{{$customerID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Đồng hồ</label>
                        <select name="product_id" id="" class="form-control">
                            @foreach ($product as $productID)
                            <option value="{{$productID->id}}">{{$productID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Điểm</label>
                        <input type="text" class="form-control" id="txt_rating" name="rating" placeholder="Name">
                        <span class="span-alert" id="error_rating"></span>
                        </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Nội dung</label>
                        <input type="text" class="form-control" id="txt_content" name="content" placeholder="Content">
                        <span class="span-alert" id="error_content"></span>
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

  {{-- JavaScript --}}
  <script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt_content','#error_content') 
       
         //Kiểm tra rating
        var flag1 =  kiemtrarong('#txt_rating','#error_rating') ;
        if(flag1){  
            flag &= kiemtrarating('#txt_rating','#error_rating');
        } 
      
        flag &= flag1 ;
       return Boolean(flag) ; //Cách 2 !!flag
    }

    function kiemtrarating(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[0-5]$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Bạn chỉ có thể chấm điểm từ 0 đến 5";
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
