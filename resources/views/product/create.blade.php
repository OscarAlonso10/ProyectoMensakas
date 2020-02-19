@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Product</h1>
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
      <form method="post" action="{{ route('product.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="state">State:</label>
              <input type="text" class="form-control" name="state"/>
          </div>
          <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>
          <div class="form-group">
            <label for="name">Business:</label>
              <select name="idBusiness">
                 @foreach($businesses as $business)
                   <option value="{{$business->idBusiness}}"> {{ $business->name }} </option>
                 @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="name">Language:</label>
              <select name="idlanguage">
                 @foreach($languages as $language)
                   <option value="{{$language->idlanguage}}"> {{ $language->nombre }} </option>
                 @endforeach
              </select>
          </div>                             
          <button type="submit" class="btn btn-primary-outline btn-success">Add Product</button>
      </form>
  </div>
</div>
</div>
@endsection