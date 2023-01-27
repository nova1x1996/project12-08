@extends('admin.layout.layout') @section('title', 'product index')
@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="text-center">Nhà Sản Xuất</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Tạo mới </button>
        </div>

        <table id="product" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <img src="{{ asset('/img/'.$item->logo) }}" alt="" />
                    </td>

                    <td>
                        <a
                            class="btn btn-primary btn-sm"
                            href="{{url('admin/supplier/view/'.$item->id)}}"
                        >
                            <i class="fas fa-folder"></i> Xem
                        </a>
                        <a
                            class="btn btn-info btn-sm"
                            href="{{url('admin/supplier/update/'.$item->id)}}"
                        >
                            <i class="fas fa-pencil-alt"></i> Sửa
                        </a>
                        @if(count($item->products) == 0)
                        <a
                            class="btn btn-danger btn-sm"
                            href="{{url('admin/supplier/delete/'.$item->id)}}"
                            onclick="return confirm ('Are you sure to want to delete this')"
                        >
                            <i class="fas fa-trash"></i> Xóa
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tạo NSX</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/supplier/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="txt-name">Tên</label>
                        <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Supplier Name">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <label for="txt-name">Hình Ảnh Logo</label>
                        <input type="file" class="form-control" id="txt-img" name="img" placeholder="Input Image">
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

  {{-- JavaScript --}}
<script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt-name','#error_name') && kiemtrarong('#txt-img','#error_img');
        return flag;
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
