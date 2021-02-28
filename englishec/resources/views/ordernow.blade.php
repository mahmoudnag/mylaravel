@extends('master')
@section('content')
<div class="container">
<div class="col-sm-10">
<table class="table">
    
      <tr>
        <th>Amount</th>
        <th>$ {{$totalorder}}</th>
      </tr>
  
      <tr>
        <td>TAX</td>
        <td>$ 0</td>
      </tr>

      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>

      <tr>
        <td>Total Amount</td>
        <td>$ {{$totalorder+10}}</td>
      </tr>

 </table>
  <div>
  <form action="orderplace" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="pwd">Title</label><br><br>
    <textarea type="text" name="address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>  
    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>online payment on Delivery</span><br><br>
  </div>
  
  <button type="submit" class="btn btn-success">Order Now</button>
</form>

 </div>
 </div>
</div>
 @stop