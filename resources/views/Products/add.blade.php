@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>
            <form action="/products/store" method="POST">
                @csrf
          <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
                <label for="End_date">Expiration Date:</label>
                <input type="date" class="form-control" id="End_date" name="End_date">
          </div>
          <div class="form-group">
                <label for="category_id">Category:</label>
                <input type="text" class="form-control" placeholder="Enter a valid category id" id="category_id" name="category_id">
          </div>
          <div class="form-group">
                <label for="Phone-Number">Phone Number:</label>
                <input type="text" class="form-control" id="Phone-Number" name="Phone_Number">
          </div>
          <div class="form-group">
                <label for="Quantity">Quantity:</label>
                <input type="number" class="form-control" id="Quantity" name="quantity">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection