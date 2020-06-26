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
        <a href="{{route('pm.myaccount.index')}}"><button class="nav-button">My Account</button></a>
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
        <a href="{{route('pm.categories.index')}}">Categories</a>
        <a href="{{route('pm.series.index')}}">Series</a>
        <a href="{{route('pm.categories.index')}}">Contact</a>
        @if(Auth::check())
        <a href="{{route('pm.myaccount.index')}}">My Account</a>
        @else
            <a href="{{route('login')}}">Login/Register</a>
        @endif
        
    </div>
</div>