@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
   @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <h1 class="display-3">Business</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('business.create')}}" class="btn btn-primary">New Business</a>
    </div>  
 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Location</td>
          <td>Email</td>
          <td>Adress</td>
          <td>Number</td>
          <td>Zipcode</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($businesses as $business)
        <tr>
            <td>{{$business->idBusiness}}</td>
            <td>{{$business->name}}</td>
            <td>{{$business->location}}</td>
            <td>{{$business->email}}</td>
            <td>{{$business->adress}}</td>
            <td>{{$business->number}}</td>
            <td>{{$business->zipcode}}</td>
            <td>
                <a href="{{ route('business.edit',$business->idBusiness)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('business.destroy', $business->idBusiness)}}" method="post">
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