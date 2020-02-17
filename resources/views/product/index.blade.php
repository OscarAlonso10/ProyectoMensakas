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