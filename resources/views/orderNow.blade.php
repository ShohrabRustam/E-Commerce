@extends('master')
@section('content')
<div class="custom-product">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Amount</td>
            <td>Rs-{{$total}}/-</td>
\          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Tax</td>
            <td>{{($total*3)/100}}</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Delivery Charge</td>
            <td>Rs-40</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Total Amount</td>
            <td>{{$total + 10+($total*9)/100}}</td>
          </tr>
        </tbody>
      </table>

      <form  action="orderplace" method="POST">
       @csrf
        <div class="form-group" >
          <label for="inputAddress">Address</label>
          <input type="text" name="address_1" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text"  name="address_2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
        </div>
      <div class="form-group">
          <label for="pwd">Payment Method</label><br><br>

          <input value = "Online" type="radio" name="payment" > <span>online payment</span><br><br>
          <input value = "EMI" type="radio" name="payment"> <span>EMI payment</span><br><br>
          <input value = "cash" type="radio" name="payment"> <span>Cash payment</span><br><br>      

      </div>
      <div>
          <button class="btn btn-success" type="submit">Order Now</button>
      </div>
</div>
@endsection