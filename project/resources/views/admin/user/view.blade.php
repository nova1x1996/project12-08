

@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">

        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Supplier : {{$user->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>User ID</th>
                <th>User Email</th>
                <th>Role</th>
               
            </tr>
          
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>@foreach($roles as $item)
                    {{$item->role->name}}
                
                    @endforeach
                
    
    
        </table>
    
    </div>
</div>

   



@endsection