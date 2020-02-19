@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Pack</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('pack.create')}}" class="btn btn-primary">New Pack</a>
    </div>
    <nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>Name</option>
      <option>Description</option>
      <option>State</option>
      <option>Price</option>
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
          <td>Description</td>
          <td>State</td>
          <td>Price</td>
        
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($packs as $pack)
        <tr>
            <td>{{$pack->idPack}}</td>
            <td>{{$pack->name}}</td>
            <td>{{$pack->description}}</td>
            <td>{{$pack->state}}</td>
            <td>{{$pack->price}}</td>
            <td>
                <a href="{{ route('pack.edit',$pack->idPack)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('pack.destroy', $pack->idPack)}}" method="post">
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