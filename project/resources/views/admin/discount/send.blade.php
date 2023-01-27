@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<form role="form" action="{{route('sendDiscount')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row card-body">
        <div class="col-6 form-group">
            <label for="txt-name">Khách hàng</label>
            <select name="email" id="" class="form-control">
                @foreach ($customer as $customerID)
                <option value="{{$customerID->email}}">{{$customerID->email}}</option>
                @endforeach
            </select>
        </div>
       
        <div class="col-6 form-group">
            <label for="txt-name">Code Discount </label>
            <input type="text" class="form-control" id="txt-name" name="code" value="{{$discount->code}}" placeholder="Code" readonly>
        </div>
        <div class="col-6 form-group">
            <label for="txt-name">Tên Discount / % Giảm giá </label>
            <input type="text" class="form-control" id="txt-name" name="name" value="{{$discount->name}}"placeholder="Name" readonly>
        </div>
   
   

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
   



@endsection