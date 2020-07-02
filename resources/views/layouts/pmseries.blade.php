<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Seo -->
        <title>@yield('title') - AzarGuliyev</title>
        <meta name="description" content="@yield('metadescription')" />
        <meta name="keywords" content="@yield('metakeywords')" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="noarchieve" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{URL::asset('pm/styles/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('pm/styles/style.css')}}">
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('favicons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{URL::asset('favicons/site.webmanifest')}}">
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
                    @yield('sidebar')
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