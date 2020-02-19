@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Product Category</h1>
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
      <form method="post" action="{{ route('product_category.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
            <label for="name">Product:</label>
              <select name="idProduct">
                 @foreach($products as $product)
                   <option value="{{$product->idProduct}}"> {{ $product->name }} </option>
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
          <button type="submit" class="btn btn-primary-outline btn-success">Add Product Category</button>
          <a href="{{route('product_category.index')}}" class="btn btn-primary">Back<a>
      </form>
  </div>
</div>
</div>
@endsection