<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css')}}/index.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>

 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">My Shop</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link text-white {{!Request::segment(1)?'active':''}} " href="{{ url('/') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'Contact'?'active':''}} " href="{{ url('/contact') }}">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'products'?'active':''}}"   href="{{ url('/products') }}">Products</a>
        </li>

        @if(auth()->user()?->role == 'admin')

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Manage Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('admin-products.create') }}">Add Product</a></li>
            <li><a class="dropdown-item" href="{{route('admin-products.index') }}">View Products</a></li>
          </ul>
        </li>
        @endif


        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/about') }}">About</a>
        </li>
        @if(!auth()->check())
        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'login'?'active':''}}" href="{{route('auth.login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'register'?'active':''}}" href="{{route('auth.register') }}">Register</a>
        </li>

        @else
        <form action="{{route('auth.logout') }}" method="POST">
          @csrf
          <input class="btn btn-dager" type="submit" value="Logout">


        </form>


        

        @endif

      </ul>

      <form class="d-flex search" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light search-submit" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    @yield('content')


<footer class="text-center mt-5 py-4 bg-dark text-white">
  <div class="container">
    <p class="mb-0">&copy; 2025 MyShop. All rights reserved.</p>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>




