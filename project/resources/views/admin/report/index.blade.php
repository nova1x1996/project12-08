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
        <h2 class="text-center ">Phản hồi</h2>
        {{-- <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Create Order </button>
        </div> --}}

        <table id="product" class="table ">
          
            <thead>
            <tr>
                <th>ID</th>
                <th>Email </th>
                <th>SĐT</th>
                
                <th>Nội dung</th>
                <th>Trạng thái</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($rp as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td >{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                
                <td style="width: 450px;">{{$item->content}}</td>
                @if($item->state)
                <td class="text-success"style="width:150px;" >Đã phản hồi</td>
                @else   
                <td class="text-danger"style="width:150px;">Chưa phản hồi</td>     
                 @endif
                
                
            
                <td style="width:160px;">
                    @if($item->state)
                    <a class="btn btn-danger btn-sm" href="{{url('admin/report/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                    @endif
                    <a class="btn btn-success btn-sm" href="{{url('admin/report/send/'.$item->id)}}" >
                        <i class="fas fa-trash"></i> Gửi
                    </a>
                 
                  
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>


@endsection
