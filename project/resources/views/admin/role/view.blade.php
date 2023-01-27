@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Role : {{$role->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>User ID</th>
                <th>User Name</th>
               
            
              
             
            </tr>
            @foreach($users as $item)
                <tr>
                    <td>{{$item->user->id}}</td>
                    <td>{{$item->user->name}}</td>
                    
                </tr>
    
            @endforeach
        </table>
    
    </div>
</div>

   



@endsection