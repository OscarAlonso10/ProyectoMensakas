@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Product Category</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('product_category.create')}}" class="btn btn-primary">New Product Category</a>
    </div>
    <nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>Name</option>
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
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($product_categories as $product_category)
        <tr>
            <td>{{$product_category->idProduct_Category}}</td>
            <td>{{$product_category->name}}</td>
            <td>
                <a href="{{ route('product_category.edit',$product_category->idProduct_Category)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('product_category.destroy', $product_category->idProduct_Category)}}" method="post">
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