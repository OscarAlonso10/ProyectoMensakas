@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Business</h1>

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
        <form method="post" action="{{ route('business.update', $business->idBusiness) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $business->name }} />
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" name="location" value={{ $business->location }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $business->email }} />
            </div>
            <div class="form-group">
                <label for="adress">Adress:</label>
                <input type="text" class="form-control" name="adress" value={{ $business->adress }} />
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="number" class="form-control" name="number" value={{ $business->number }} />
            </div>
            <div class="form-group">
                <label for="zipcode">ZipCode:</label>
                <input type="number" class="form-control" name="zipcode" value={{ $business->zipcode }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection