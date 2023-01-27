@extends('admin.layout.layout') @section('title','view supplier')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <h1 class="text-center">{{$product->name}}</h1>
        </div>
        
        
        
            <form action="" class="form">
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->id}}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nhà sản xuất</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->supplier->name}}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Loại</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->type->name}}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->name}}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Số lượng</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->quantity}}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->state}}"
                                readonly
                            />
                        </div>
                    </div>
                    
                    <div class="col-md-3    ">
                        <div class="form-group">
                            <label for="">Giá</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$product->price}}"
                                readonly
                            />
                        </div>
                    </div>
                  
                   
                 
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Hình ảnh</label><br>
                            <img class="img-fluid" src='{{ asset($product->img)}}' alt="">
                        </div>
                    </div>
                  
                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Thông tin</label>
                           <div class="div">{!!$product->information!!}</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Miêu tả</label>
                            
                        </div>
                        <div>{!!$product->descript!!}</div>
                    </div>
                </div>
        
               
            </form>
    </div>
</div>


@endsection
