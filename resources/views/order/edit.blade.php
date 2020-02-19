@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Order</h1>

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
        <form method="post" action="{{ route('order.update', $order->idOrder) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $order->name }} />
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" name="status" value={{ $order->status }} />
            </div>

            <div class="form-group">
                <label for="json">Json:</label>
                <input type="text" class="form-control" name="json" value={{ $order->json }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('order.index')}}" class="btn btn-primary">Back<a>
        </form>
    </div>
</div>
@endsection