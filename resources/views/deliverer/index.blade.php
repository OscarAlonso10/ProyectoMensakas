@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Deliverer</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('deliverer.create')}}" class="btn btn-primary">New Deliverer</a>
    </div>  
 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($deliverers as $deliverer)
        <tr>
            <td>{{$deliverer->idDeliverer}}</td>
            <td>{{$deliverer->first_name}} {{$deliverer->last_name}}</td>
            <td>{{$deliverer->email}}</td>
            <td>{{$deliverer->phone}}</td>
            <td>
                <a href="{{ route('deliverer.edit',$deliverer->idDeliverer)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deliverer.destroy', $deliverer->idDeliverer)}}" method="post">
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