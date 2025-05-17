<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Simple Laravel 11 CRUD Application Tutorial</title>
 <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.
min.css">
 <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.11.1/font/bootstrap-icons.css">
</head>
<body> 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
 <a class="navbar-brand" href="{{ url('/') }}">Laravel 11 CRUD</a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
 <ul class="navbar-nav me-auto">
 <li class="nav-item">
 <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
 </li>
 </ul>
 @auth
 <ul class="navbar-nav">
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
 {{ Auth::user()->name }}
 </a>
 <ul class="dropdown-menu dropdown-menu-end">
 <li>
 <form method="POST" action="{{ route('logout') }}">
 @csrf
 <button type="submit" class="dropdown-item">
 <i class="bi bi-box-arrow-right"></i> Logout
 </button>
 </form>
 </li>
 </ul>
 </li>
 </ul>
 @endauth
 </div>
 </div>
 </nav>

 <div class="container">
 <h3 class=" mt-3">Simple Laravel 11 CRUD Application 
Tutorial</h3>
 @yield('content')
 <div class="row justify-content-center text-center mt-3">
 <div class="col-md-12">
<p>
Return to Website: <a
href="https://www.usjr.edu.ph/"><strong>University of San Jose -
Recoletos</strong></a>
</p>
 
 </div>
 </div>
 </div>
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bu
ndle.min.js"></script>
</body>
</html>