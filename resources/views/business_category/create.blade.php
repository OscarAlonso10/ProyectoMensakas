@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Business Category</h1>
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
      <form method="post" action="{{ route('business_category.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <button type="submit" class="btn btn-primary-outline btn-success">Add Business Category</button>
          <<button href="{{ route('business_category.index')}}" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Atras</button>
      </form>
  </div>
</div>
</div>
@endsection