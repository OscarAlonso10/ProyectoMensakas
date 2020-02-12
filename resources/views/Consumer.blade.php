<!DOCTYPE html>
<html>
<head>
    <title>Consumer</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('consumer') }}">consumer</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('consumer') }}">View All consumer</a></li>
        <li><a href="{{ URL::to('consumer/create') }}">Create a consumer</a>
    </ul>
</nav>

<h1>consumer</h1>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
    @foreach($consumer as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>

                <a class="btn btn-small btn-success" href="{{ URL::to('consumer/' . $value->id) }}">Show this consumer</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('consumer/' . $value->id . '/edit') }}">Edit this consumer</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>