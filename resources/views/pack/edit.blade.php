@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Pack</h1>

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
        <form method="post" action="{{ route('pack.update', $pack->idPack) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $pack->name }} />
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description" value={{ $pack->description }} />
            </div>

            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" name="state" value={{ $pack->state }} />
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" value={{ $pack->price }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('pack.index')}}" class="btn btn-primary">Back<a>
        </form>
    </div>
</div>
@endsection