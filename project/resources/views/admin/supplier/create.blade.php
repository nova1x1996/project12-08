


@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create Supplier</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/supplier/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-name">Name</label>
                                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Type Name">
                                <span class="span-alert" id="error_name"></span>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Image</label>
                                <input type="file" class="form-control" id="txt-img" name="img" placeholder="Input Image">
                                <span class="span-alert" id="error_img"></span>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" id="dangKy" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
        
</section>

<script>
    var checkvalidation = function (){
        var flag = true;
      var bientam =  document.querySelector('#txt-name').value;
      var bientam1 =  document.querySelector('#txt-img').value;
      //Name
      if(bientam === ""){
        document.querySelector('#error_name').innerHTML = "Không được để trống !";
        document.querySelector('#txt-name').style.border = "1px solid #dc3545";
        return false;
      }else{
        document.querySelector('#error_name').innerHTML = "";
        document.querySelector('#txt-name').style.border = "";
      }
      //IMG
      if(bientam1 == ""){
        document.querySelector('#error_img').innerHTML = "Bạn chưa thêm hình ảnh";
        document.querySelector('#txt-img').style.border = "1px solid #dc3545";
        return false;
      }else{


        document.querySelector('#error_img').innerHTML = "";
        document.querySelector('#txt-img').style.border = "";
      }
    }
    document.querySelector('#dangKy').onclick = checkvalidation;

</script>
@endsection

















