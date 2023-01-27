

@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Role User: {{$role_user->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>Role</th>
                <th>User</th>
               
            </tr>
          
                <tr>
                    <td>{{$role_user->role->name}}</td>
                    <td>{{$role_user->user->name}}</td>
                 
                </tr>
    
      
        </table>
    
    </div>
</div>

   



@endsection