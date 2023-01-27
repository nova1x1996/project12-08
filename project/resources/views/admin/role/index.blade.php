


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')




<div class="card">
    <div class="card-body">
        <h2 class="text-center ">Role</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Create Role</button>        </div>
        <table id="product" class="table ">
         
            
            <thead>
            <tr>
                <th>Role Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($roles as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->slug}}</td>
        
                <td >
                    <a class="btn btn-primary btn-sm" href="{{url('admin/role/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/role/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/role/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Delete
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
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Role</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/role/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="txt-name">Name</label>
                        <input type="text" class="form-control" id="txt_name" name="name" placeholder="Name">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <label for="txt-name">Slug</label>
                        <input type="text" class="form-control" id="txt_slug" name="slug" placeholder="Slug">
                        <span class="span-alert" id="error_slug"></span>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id="dangKy" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div> --}}
      </div>
    </div>
  </div>

  <script>

    var checkValidation = function (){
       var flag = kiemtrarong('#txt_name','#error_name') 
       & kiemtrarong('#txt_slug','#error_slug') ;
       
       
      
  
       return Boolean(flag) ; //Cách 2 !!flag
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
