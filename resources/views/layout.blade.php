<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
    body { padding-top:0%; }
    .panel-body .btn:not(.btn-block) { width:100%;margin-bottom:10%; }
    .navbar-nav{float: right; margin: 0;}
    #panel1 {
    width: 100%;
    margin: 0 auto;
    margin-left: 50%;
  }
</style>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
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
   <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="panel1" class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> Admin Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="consumer" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Consumer</a>
                          <a href="business" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-home"></span> <br/>Business</a>
                          <a href="deliverer" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-map-marker"></span> <br/>Deliverer</a>
                          <a href="business_Category" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-th-list"></span> <br/>Business Category</a>
                        </div>
                    <div class="col-xs-6 col-md-6">
                          <a href="pack" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Pack</a>
                          <a href="product" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-th-list"></span> <br/>Products</a>
                          <a href="order" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-euro"></span> <br/>Orders</a>
                          <a href="product_Category" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-th-list"></span> <br/>Product Category</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>