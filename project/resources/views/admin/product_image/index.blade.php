@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="text-center ">Hình Ảnh Thêm Đồng Hồ</h2>
        <div class="d-flex justify-content-end mb-3 ">  <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Tạo mới</button></div>

        <table id="product" class="table">
      
    
            <thead>
            <tr>
                <th>ID</th>
                <th>Đồng Hồ</th>
                <th>Ảnh Phụ</th>
                <th>Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach ($productimages as $item)
            <tr>
                <td>{{$item->product->id}}</td>
                <td>{{$item->product->name}}</td>          
                <td><img src='{{ asset($item->img_product)}}' alt=""></td>
                <td >
                    {{-- <a class="btn btn-info btn-sm" href="{{url('admin/product_image/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Sửa
                    </a> --}}
                    <a class="btn btn-danger btn-sm" href="{{url('admin/product_image/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
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
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Extra Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/product_image/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                    <div class="col-6 form-group">
                        <label for="txt-name">Đồng Hồ</label>
                        <select name="product_id" id="txt_sup" class="form-control">
                            @foreach ($products as $supID)
                            <option value="{{$supID->id}}">ID:{{$supID->id}} {{$supID->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Ảnh phụ</label>
                        <input type="file" class="form-control" id="txt_img" name="img_product[]" multiple placeholder="Input Image">
                        <span class="span-alert" id="error_img"></span>    
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

  
@endsection
