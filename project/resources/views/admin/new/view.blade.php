

@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Blog: {{$new->title}}</h2>

        <form action="" class="form">
                
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{$new->title}}"
                            readonly
                        />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">ID Quản trị viên</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{$new->user_id}}"
                            readonly
                        />
                    </div>
                </div>

            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Hình</label><br>
                        <img class="img-fluid" src='{{ asset($new->img)}}' style="width: 80%">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tác giả</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{$new->author}}"
                            readonly
                        />
                    </div>
                </div>
                <br \>
                <div class="col-md-13">
                    <div class="form-group">
                        <label for="">Nội dung</label>
                       <div>{!!$new->blogcontent!!}</div>
                    </div>
                </div>
                
              
               <style>
                    .custom{
                        background-color: #e9ecef;
                        border-radius: 10px;
                        border: 1px solid #ced4da;
                        padding: 8px;
                    }
                </style>
           
        </form>
    </div>
</div>

   



@endsection