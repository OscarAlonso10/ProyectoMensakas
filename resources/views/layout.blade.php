<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/layout') }}">layout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="container">
  <h1>AdminPanel</h1>
  <div class="btn-group-vertical">

    <a href="{{ url('/user') }}" class="btn btn-primary">User</a>

    <a href="{{ url('/business') }}" class="btn btn-primary">Business</a>

    <a href="{{ url('/menu') }}" class="btn btn-primary">Menu</a>

    <a href="{{ url('/orders') }}" class="btn btn-primary">Orders</a>

    <a href="{{ url('/deliver') }}" class="btn btn-primary">Deliver</a>
  </div>
</div>
</body>
</html>