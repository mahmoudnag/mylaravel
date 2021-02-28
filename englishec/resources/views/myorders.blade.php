
 @extends('master')
@section('content')
<div class="container">
<div class="col-sm-10">
 <div class="trend-wrapper">

 
 @foreach($orders as $item)
  <div class="row cart-list-dividor">


    <div class=col-sm-3>
     <a href="details/{{$item->id}}">
      <img  class="trending-img" src="{{$item->gallery}}">
      </a>
      </div>
      <div class=col-sm-4>

    <h5> Name: {{$item->name}}</h5>
    <h5> Delivery Status:{{$item->status}} </h5>
    <h5> payment method:{{$item->payment_method}} </h5>
    <h5> payment status: {{$item->payment_status}} </h5>
    <h5> Address: {{$item->address}} </h5>
    
      </div>
      
  
  </div>
  @endforeach
 </div>
<br><br>

 
 </div>
</div>
 @stop