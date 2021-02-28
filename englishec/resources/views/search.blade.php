@extends('master')
@section('content')

    <div class="col-sm-4">
      <a href="#" class="product-link">Filter</a>
  </div>

    <div class="col-sm-4">
     <div class="trend-wrapper">
    @foreach($products as $item)
     <div class="search-item">
     <a href="details/{{$item['id']}}">
      <img src="{{$item['gallery']}}">
      <h3>{{$item['name']}}</h3>
      <h2>{{$item['description']}}</h2>
    </a>
  </div>
  @endforeach
 </div>


    


@endsection