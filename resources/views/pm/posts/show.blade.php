@extends('layouts.pm')
@section('title'){{$post->name}} @endsection
@section('metadescription'){{Str::limit($post->description, 100)}} @endsection
@section('metakeywords'){{$post->keywords}} @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Posts</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
@endsection
@section('content')
<div class="col-md-12 article-col" style="height: 100%;">
  <div class="card article-card">
      <div class="card-body card_body_fixed_height article-card-body">
          <a href="#" class="card-title article-title" style="text-align: center"><h5>Object-Oriented Principles in PHP</h5></a>
          <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
              Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
              Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
          </p>
          <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
              Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
              Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
          </p>
          <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
              Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
              Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
          </p>
          <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
              Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
              Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
          </p>
              
      </div>
      <ul class="list-group list-group-flush card-list-group">
        <li class="list-group-item article-category"><a href="{{route('pm.categories.show', $post->category->slug)}}"><ion-icon name="briefcase-sharp"></ion-icon> {{$post->category->name}}</a></li>
        @if($post->series()->exists()) 
        <li class="list-group-item article-category"><a href="{{route('pm.series.show', $post->series->slug)}}"><ion-icon name="albums"></ion-icon> {{$post->series->name}} <span class="badge badge-pill badge-dark">Series</span></a></li>
        @else 
        <li class="list-group-item article-category"><a href="{{route('pm.posts.show', $post->slug)}}"><ion-icon name="albums"></ion-icon> Single Article </a></li> 
        @endif
        <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> {{$post->commentsCount()}} Comments</a></li>
        <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> {{$post->user->name}}</a></li>
        <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> {{ date("F j, Y, g:i a",strtotime($post->created_at)) }}</p></li>
    </ul>
      <div class="card-body footer">
        
        <div class="col-md-12" style="margin-bottom: 3%;">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 1%;">
                    @if(Auth::check())
                    {{Form::open(array('method' => 'POST', 'action' => ['PmMyAccountsController@likedpostsstore', $post->id]))}}
                    @if(auth()->user()->likes->whereIn('post_id', $post->id)->first())
                    <button class="btn btn-dark"><ion-icon name="thumbs-up-outline"></ion-icon> Take your Like back</button>
                    @else
                    <button class="btn btn-light"><ion-icon name="thumbs-up-outline"></ion-icon> Like</button>
                    @endif
                    {{Form::close()}}
                    @else
                    <a class="btn btn-light" href="{{route('login')}}"><ion-icon name="thumbs-up-outline"></ion-icon> Like</a>
                    @endif
                </div>
                <div class="col-md-12" style="margin-bottom: 1%;">
                    @if(Auth::check())
                    {{Form::open(array('method' => 'POST', 'action' => ['PmMyAccountsController@savedpostsstore', $post->id]))}}
                    @if(auth()->user()->savedposts->whereIn('post_id', $post->id)->first())
                    <button class="btn btn-dark" type="submit" value="Like">Remove from Read Later <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
                    @else
                    <button class="btn btn-primary" type="submit" value="Like">Add to Read Later <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
                    @endif 
                    {{Form::close()}}
                    @else
                    <a class="btn btn-primary" href="{{route('login')}}" style="color: white;"><ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon> Add to Read Later </a>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
    </div>
</div>
@include('pminc.comments')
@endsection