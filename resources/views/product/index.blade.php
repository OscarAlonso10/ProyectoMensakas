<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Product</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('product.create')}}" class="btn btn-primary">New Product</a>
<div class="btn-group">
  <button type="button" class="btn btn-danger">Menu</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="./deliverer">Deliverer</a>
    <a class="dropdown-item" href="./consumer">Consumer</a>
    <a class="dropdown-item" href="./order">Order</a>
    <a class="dropdown-item" href="./pack">Pack</a>
    <a class="dropdown-item" href="./business">Business</a>
    <a class="dropdown-item" href="./product_category">Product Category</a>
    <a class="dropdown-item" href="./business_category">Business Category</a>
    <div class="dropdown-divider"></div>
  </div>
</div>
    </div>  
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>State</td>
          <td>Price</td>
          <td>Type</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->idProduct}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->state}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->type}}</td>
            <td>
                <a href="{{ route('product.edit',$product->idProduct)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('product.destroy', $product->idProduct)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection