@extends('master')
@section('content')
<div class="container">
 <div class="col-sm-10">
  <div class="trend-wrapper">
   <h4>product trend</h4>
   <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
 
   @foreach($products as $item)
  <div class="row cart-list-dividor">
    <div class=col-sm-3>
     <a href="details/{{$item->id}}">
      <img  class="trending-img" src="{{$item->gallery}}">
      </a>
      </div>
      <div class=col-sm-4>
       <h3>{{$item->name}}</h3>
       <p>{{$item->description}}</p>
      </div>
      <div class=col-sm-3>
       <a href="cartremove/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
      </div>
  
  </div>
  @endforeach
  <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
 </div>
 <br><br>

 
 </div>
</div>
 @stop