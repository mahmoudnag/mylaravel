
@extends('master')
@section('content')


<form action="register" method="POST">
	{{csrf_field()}}
	<div class="container custom-login">
		<div class="row">
			<div class=" col-sm-6 col-sm-offest-4">
            <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
		

  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
   
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
   <button type="submit" class="btn btn-primary">Log In</button>
  </form>
		
  </div>
 </div>	
</div>

@stop