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
@include('pminc.navigationbar')
@include('pminc.searchbar')
<main class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-11 col-lg-10 article_section">
                <div class="row ">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                @yield('breadcrumb')
                            </ol>
                        </nav>
                    </div>
                    @yield('content')
                    <div class="col-md-4 playlist">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action text-center">Playlist</a>
                            @if(count($posts)>0)
                            @foreach($posts as $post)
                                <a href="{{route('pm.series.post', [$series->slug, $post->slug])}}" class="list-group-item list-group-item-action {{ Request::is('series/'.$series->slug.'/'.$post->slug) ? 'active btn-dark' : '' }}">{{$post->name}}</a>
                            @endforeach
                            @else
                            <a class="list-group-item list-group-item-action">No post has been added to {{$series->name}}</a>
                            @endif
                        </div>
                    </div>
                    @yield('comments')
                    
                    
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