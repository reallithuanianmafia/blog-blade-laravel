<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')| AzarGuliyev</title>
    <link rel="stylesheet" href="{{URL::asset('pm/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('pm/styles/style.css')}}">
</head>
<body>
<header>
    <div>
        <a href="{{route('pm.home')}}" class="brand-logo"><button class="nav-button">AzarGuliyev</button></a>
    </div>
    <nav>
        <ul class="nav-links desktop__menu">
            <li><a href="{{route('pm.home')}}">Home</a></li>
            <li><a href="{{route('pm.categories.index')}}">Categories</a></li>
            <li><a href="{{route('pm.posts.index')}}">Posts</a></li>
            <li><a href="{{route('pm.series.index')}}">Series</a></li>
        </ul>
    </nav>
    <div class="user_panel">
        @if(!Auth::check())
        <a href="#"><button class="nav-button">Login</button></a>
        <a href="#"><button class="nav-button">Register</button></a>
        @else
        <a href="{{route('wm.home')}}"><button class="nav-button">My Account</button></a>
        <a href="{{route('wm.home')}}"><button class="nav-button">Web Manager</button></a>
        @endif
    </div>
    <div class="openDiv">
    <a class="open" onclick="openNav()" href="#">MENU &rarr;</a>
    </div>
</header>
<div id="mobile__menu" class="overlay">
    <a class="close" onclick="closeNav()">&times;</a>
    <div class="overlay__content">
        <a href="{{route('pm.home')}}">Home</a>
        <a href="{{route('pm.home')}}">About/FAQ</a>
        <a href="{{route('pm.categories.index')}}">Categories/Series</a>
        <a href="{{route('pm.categories.index')}}">Contact</a>
        <a href="{{route('login')}}">Login/Register</a>
    </div>
</div>
@include('pminc.searchbar')
<main class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-7 col-lg-7 article_section">
                <div class="row ">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                @yield('breadcrumb')
                            </ol>
                        </nav>
                    </div>
<!--<div class="col-md-6 article-col">
    <div class="card article-card">
        <div class="card-body card_body_fixed_height article-card-body">
            <a href="#" class="card-title article-title"><h5>Object-Oriented Principles in PHP</h5></a>
            <p class="card-text">The typical beginner, whether they realize it or not, first learns procedural programming.</p>
        </div>
        <ul class="list-group list-group-flush card-list-group">
            <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> PHP</a></li>
            <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
            <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> azagul</a></li>
            <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> 20.03.2000 / 12:30</p></li>
        </ul>
        <div class="card-body footer">
            <a href="#" class="card-link read-more">Read More	&rarr;</a>
        </div>
    </div>
</div>-->
@yield('content')
                </div>
            </div>
        </div>
    </div>
</main>
@include('pminc.footer')
<script type="text/javascript" src="{{URL::asset('pm/js/mobile.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>