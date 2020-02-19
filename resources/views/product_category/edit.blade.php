@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Product Category</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('product_category.update', $product_category->idProduct_Category) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $product_category->name }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('product_category.index')}}" class="btn btn-primary">Back<a>
        </form>
    </div>
</div>
@endsection