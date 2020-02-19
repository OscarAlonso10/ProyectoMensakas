@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Consumer</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('consumer.create')}}" class="btn btn-primary">New Consumer</a>
    </div>  
 <nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>First_Name</option>
      <option>Last_Name</option>
      <option>Email</option>
      <option>Location</option>
      <option>Phone</option>
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
          <td>Email</td>
          <td>Location</td>
          <td>Phone</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($consumers as $consumer)
        <tr>
            <td>{{$consumer->idConsumer}}</td>
            <td>{{$consumer->first_name}} {{$consumer->last_name}}</td>
            <td>{{$consumer->email}}</td>
            <td>{{$consumer->location}}</td>
            <td>{{$consumer->phone}}</td>
            <td>
                <a href="{{ route('consumer.edit',$consumer->idConsumer)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('consumer.destroy', $consumer->idConsumer)}}" method="post">
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