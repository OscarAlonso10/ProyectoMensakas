@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Order</h1>
<div class="btn-group">
  <button type="button" class="btn btn-danger">Menu</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="./deliverer">Deliverer</a>
    <a class="dropdown-item" href="./consumer">Consumer</a>
    <a class="dropdown-item" href="./product">Product</a>
    <a class="dropdown-item" href="./pack">Pack</a>
    <a class="dropdown-item" href="./business">Business</a>
    <a class="dropdown-item" href="./product_category">Product Category</a>
    <a class="dropdown-item" href="./product_business">Product Business</a>
    <div class="dropdown-divider"></div>
  </div>
</div>
 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Status</td>
          <td>Json</td>
          <td>ID Deliverer</td>
          <td colspan = 1>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->idOrder}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->json}}</td>
            <td>{{$order->fk_deliverer_id}}</td>
            <td>
                <a href="{{ route('order.edit',$order->idOrder)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection