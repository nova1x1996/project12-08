

@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')

                <!-- general form elements -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"  >Create Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/product/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row card-body">
                            <div class="col-6 form-group">
                                <label for="txt-name">Supplier</label>
                                <select name="supplier_id" id="" class="form-control">
                                    @foreach ($suppliers as $supID)
                                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Type</label>
                                <select name="type_id" id="" class="form-control">
                                    @foreach ($types as $typeID)
                                    <option value="{{$typeID->id}}">{{$typeID->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Name</label>
                                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Name">
                            </div>
                            <div class="col-6 form-group">
                                <label for="txt-name">Price</label>
                                <input type="text" class="form-control" id="txt-name" name="price" placeholder="Input Price">
                            </div>
                            <div class="col-12 form-group">
                                <label for="txt-name">Information</label>
                                <textarea type="text" class="form-control" id="txt-name" name="information" placeholder="Input Information"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label for="txt-name">Description</label>
                                <textarea type="text" class="form-control" id="txt-name" name="description" placeholder="Input Description"></textarea>
                            </div>
                           
                            <div class="col-4 form-group">
                                <label for="txt-name">State</label>
                                <select name="state" id="" class="form-control">                            
                                    <option value="Còn hàng">Còn hàng</option> 
                                    <option value="Hết hàng">Hết hàng</option>       
                                </select>
                            </div>
                            <div class="col-4 form-group">
                                <label for="txt-name">Image</label>
                                <input type="file" class="form-control" id="txt-name" name="img" placeholder="Input Image">
                            </div>
                            <div class="col-4 form-group">
                                <label for="txt-name">Quantity</label>
                                <input type="text" class="form-control" id="txt-name" name="quantity" placeholder="Quantity">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
        
</section>
@endsection