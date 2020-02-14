<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #9c9c9c;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;">
                    {{ config('app.name', 'Mensakas') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" >
                                <a class="nav-link" href="{{ route('login') }}" style="color: white;" >{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <h1>Panel Admin: Consumer</h1>
  <div class="btn-group-horizont">

    <a href="business" class="btn btn-primary">Business</a>

    <a href="consumer" class="btn btn-primary">Consumer</a>

    <a href="order" class="btn btn-primary">Orders</a>

    <a href="deliverer" class="btn btn-primary">Deliverer</a>

    <a href="consumer/create" class="btn btn-primary">Crear Consumer</a>

  </div>
	<h1>Consumers</h1>
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>phone</th>
      </tr>
      @foreach($consumers as $consumer)  
          <tr>
            <td >{{$consumer->first_name}}</td>
            <td >{{$consumer->last_name}}</td>
            <td >{{$consumer->email}}</td>
            <td>{{$consumer->location}}</td>
            <td>{{$consumer->phone}}</td>
          </tr>
    @endforeach
    </table> 
</body>
</html>