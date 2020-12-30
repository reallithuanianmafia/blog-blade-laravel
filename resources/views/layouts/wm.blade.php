<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{URL::asset('pm/styles/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('wm/css/style.css')}}">
    @yield('head')
    <title>Document</title>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('wm.home')}}">WM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('wm.home')}}">Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pm.home')}}">Public</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <main class="container-fluid wm-container">
    <div class="row">
      <div class="offset-lg-1 col-lg-2 mt-4">
        <div class="list-group my-nav-list">
          <a href="{{route('wm.home')}}" class="list-group-item {{ Route::is('wm.home') ? 'active' : '' }}">Private Office</a>
          <a href="{{route('wm.categories.index')}}" class="list-group-item {{ Route::is('wm.categories.index') ? 'active' : '' }}">Categories</a>
          <a href="{{route('wm.series.index')}}" class="list-group-item {{ Route::is('wm.series.index') ? 'active' : '' }}">Series</a>
          <a href="{{route('wm.posts.index')}}" class="list-group-item {{ Route::is('wm.posts.index') ? 'active' : '' }}">Posts</a>
          <a href="{{route('wm.tags.index')}}" class="list-group-item {{ Route::is('wm.tags.index') ? 'active' : '' }}">Tags</a>
          <a href="{{route('wm.users.index')}}" class="list-group-item {{ Route::is('wm.users.index') ? 'active' : '' }}">Users</a>
        </div>
      </div>
      <div class="col-lg-8 mt-4">
        @yield('content')
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </main>

  @include('wminc.footer')
  
  <!-- /.container -->

  <script src="{{URL::asset('js/app.js')}}" defer></script>
  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::asset('wm/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('wm/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  @yield('js')
</body>
</html>