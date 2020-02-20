@extends('base')

@section('main')
<div class="row">
<div class="col-sm-4">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Product</h1>
 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>State</td>
          <td>Price</td>
          <td>Type</td>
          <td>Business</td>
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
            <td>{{$product->business->name}}</td>
           
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection