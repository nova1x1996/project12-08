@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Discount : {{$discount->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>Code </th>
                <th>Order ID</th>
                <th>Order Name</th>
                
                
             
             
            </tr>
         
                <tr>
                    <td>{{$discount->code}}</td>
                    <td>{{$discount->order->id}}</td>
                    <td>{{$discount->order->name}}</td>
           
                 
                </tr>
    
        </table>
    
    </div>
</div>

   



@endsection