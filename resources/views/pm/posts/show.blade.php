@extends('layouts.pm')
@section('title'){{$post->name}} @endsection
@section('metadescription'){{Str::limit($post->description, 100)}} @endsection
@section('metakeywords'){{$post->category->name}} @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Posts</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
@endsection
@section('content')
<div class="col-md-12 article-col" style="height: 100%;">
  <div class="card article-card">
      <div class="card-body card_body_fixed_height article-card-body">
          <a href="#" class="card-title article-title"><h5>Object-Oriented Principles in PHP</h5></a>
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
          <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp" role="img" class="md hydrated" aria-label="briefcase sharp"></ion-icon> PHP</a></li>
          <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp" role="img" class="md hydrated" aria-label="chatbubbles sharp"></ion-icon> 5 Comments</a></li>
          <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp" role="img" class="md hydrated" aria-label="person sharp"></ion-icon> azagul</a></li>
          <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp" role="img" class="md hydrated" aria-label="calendar sharp"></ion-icon> {{ date("F j, Y, g:i a",strtotime($post->created_at)) }}</p></li>
          <li class="list-group-item article-date"><p><ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon> 130 Likes</p></li>
      </ul>
      <div class="card-body footer">
        <div class="col-md-12" style="margin-bottom: 3%;">
            <form>
                <button class="btn btn-light" type="submit" value="Like">Like <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
            <!--<button class="btn btn-dark" type="submit" value="Like">Liked <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
             -->    
            </form>
        </div>
        <div class="col-md-12" style="margin-bottom: 3%;">
            <form>
                <button class="btn btn-info" type="submit" value="Like">Add to Read Later <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
            </form>
        </div>
        <div class="col-md-12" style="margin-bottom: 3%;">
            <form>
                <button class="btn btn-danger" type="submit" value="Like">Report this article <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
            </form>
        </div>
    </div>
    </div>
</div>
@include('pminc.comments')
@endsection