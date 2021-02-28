@extends('master')
@section('content')
<div class="container product-login">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="item {{$item['id']==25?'active':''}}">
      <a href="details/{{$item['id']}}" class="product-link">
         <img  class="slider-img" src="{{$item['gallery']}}">
  
         <h3>{{$item['name']}}</h3>
         <p>{{$item['description']}}</p>
      </a>

      
    
    </div>
    @endforeach
  </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
 <div class="trend-wrapper">
  <h3>product trend</h3>
 @foreach($products as $item)
  <div class="trend-item">
    <a href="details/{{$item['id']}}" class="product-link">
      <img  class="trending-img" src="{{$item['gallery']}}">
      <h3>{{$item['name']}}</h3>
    </a>
  </div>
  @endforeach
 </div>
</div>
@endsection