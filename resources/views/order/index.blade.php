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
      <nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>Name</option>
      <option>Status</option>
      <option>Json</option>
      <option>ID Deliverer</option>
    </select>


    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">


    
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
 
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