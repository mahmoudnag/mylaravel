<?php 
use App\Http\Controllers\productcontroller;
$totalcart=0;
if(session()->has('user'))
{

$totalcart=productcontroller::cartitem();
}
?>

<nav class="navbar navbar-default">
  <a class="navbar-brand" href="/">E-commerce</a>
<div class="container-fluid">
  <div class="navbar-headr">
  <div class="collapse navbar-collapse" id="bs-example navbar-collapse-1">
    <ul class=" nav navbar-nav">
      <li class="">
        <a href="login">Home</a>
      </li>
      <li >
        <a  href="myorders">Orders</a>
      </li>
      <li class="nav-item">
        <a class=" disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="/search">
      <div class="form-group">
      <input class="form-control" name="query" type="text" placeholder="Search">
      </div>
      <button class="btn btn-default" type="submit">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="cartlist"><i class="fas fa-mobile-alt"></i> {{$totalcart}}</a>
      </li>
      @if(session()->has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fad fa-user-circle"></i>{{session()->get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">logout</a></li>
          
        </ul>
        @else
        <li><a href="/login">login</a></li>
        <li><a href="/register">register</a></li>
        @endif
      </li>
    </ul>
    </div>
    </div>
  </div>
</nav>
