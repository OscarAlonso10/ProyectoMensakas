@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Business</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('business.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Location:</label>
              <input type="text" class="form-control" name="location"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="country">Adress:</label>
              <input type="text" class="form-control" name="adress"/>
          </div>
          <div class="form-group">
              <label for="job_title">Number:</label>
              <input type="number" class="form-control" name="number"/>
          </div>
          <div class="form-group">
              <label for="job_title">ZipCode:</label>
              <input type="number" class="form-control" name="zipcode"/>
          </div>                       
          <button type="submit" class="btn btn-primary-outline btn-success">Add Business</button>
      </form>
  </div>
</div>
</div>
@endsection