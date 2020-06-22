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
@if (\Route::is('pm.home'))  
@include('pminc.slogan')
@endif
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