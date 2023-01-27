@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
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
        <h2 class="text-center ">Mã giảm giá</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Tạo mới </button>
        </div>

        <table id="product" class="table ">
          
            <thead>
            <tr>
                <th>ID</th>
                <th>Mã</th>
                <th>Tên/Phần trăm</th>      
                <th>Trạng Thái</th>                     
             
                <th>Action</th>
            </tr>   
            </thead>
            <tbody>
                @foreach ($discounts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->code}} </td>
                <td>{{$item->name}} - ( Giảm {{$item->name}} %)</td>
                @if($item->state == 0)
                <td class="text-success">Chưa sử dụng</td>
                @else 
                <td class="text-danger">Đã sử dụng</td>
                @endif
                
                <td class="">
                    @if($item->state != 0)
                    <a class="btn btn-primary btn-sm" href="{{url('admin/discount/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> Xem
                    </a>
                @endif
                   
                    {{-- <a class="btn btn-info btn-sm" href="{{url('admin/discount/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a> --}}
               
                    
                    <a class="btn btn-danger btn-sm" href="{{url('admin/discount/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                    @if($item->state == 0)
                    <a class="btn btn-success btn-sm" href="{{url('admin/discount/send/'.$item->id)}}" >
                        <i class="fas fa-trash"></i> Gửi
                    </a>
            
                @endif
                    
               
                   
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
          <h5 class="modal-title" id="staticBackdropLabel">Create Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/discount/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                   
                    
                    <div class="col-6 form-group">
                        <label for="txt-name">Mã </label>
                        <input type="text" class="form-control" id="txt_code" name="code" value="{{rand(100000000 , 999999999)}}">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Tên/Phần trăm</label>
                        <select name="name" id="txt_name" class="form-control">
                           
                            <option value="5">Giảm giá 5%</option>
                            <option value="10">Giảm giá 10%</option>
                            <option value="15">Giảm giá 15%</option>
                            <option value="20">Giảm giá 20%</option>
                          
                        </select>
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
