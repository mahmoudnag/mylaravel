@extends('master')
@section('content')
<div class="container product-login">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}">
    </div>

    <div class="col-sm-6">
      <a href="/">GO Back</a>
      <h2>{{$product['name']}}</h2>
      <h3>Price: {{$product['price']}}</h3>
      <h4>Descriptin: {{$product['description']}}</h4>
      <h4>Category: {{$product['category']}}</h4>
      <br><br>
      <form action="/add_to_cart" method="POST">
       {{@csrf_field()}}
       <input type="hidden" name="product_id" value={{$product['id']}}>
      
      <button class="btn btn-primary">Add to Card</button>
      </form>
    




       <br><br>
      <a href="ordernow" class="btn btn-success">Order Now</a>
      
    </div>
  </div>
</div>



@endsection
