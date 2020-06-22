@extends('layouts.pmseries')
@section('title'){{$series->name}} @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.series.index')}}">Series</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.series.show', $post->series->slug)}}">{{$series->name}}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
@endsection
@section('content')
<div class="col-md-8">
    <div class="card">
        
        <div class="card-body">
          <h5 class="card-title text-center">{{$post->name}}</h5>
          <p class="card-text">{{$post->description}}</p>
          <p class="card-text">{{$post->content}}</p>
        </div>
        <ul class="list-group list-group-flush card-list-group">
            <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp" role="img" class="md hydrated" aria-label="briefcase sharp"></ion-icon> {{$post->category->name}}</a></li>
            <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp" role="img" class="md hydrated" aria-label="chatbubbles sharp"></ion-icon> 5 Comments</a></li>
            <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp" role="img" class="md hydrated" aria-label="person sharp"></ion-icon> {{$post->user->name}}</a></li>
            <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp" role="img" class="md hydrated" aria-label="calendar sharp"></ion-icon> 20.03.2000 / 12:30</p></li>
            <li class="list-group-item article-date"><p><ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon> 130 Likes</p></li>
        </ul>
        <div class="card-body footer">
            <div class="col-md-12" style="margin-bottom: 3%;">
                <form>
                    <button class="btn btn-light" type="submit" value="Like">Like <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
                    <button class="btn btn-dark" type="submit" value="Like">Liked <ion-icon name="heart" role="img" class="md hydrated" aria-label="heart"></ion-icon></button>
                
                </form>
            </div>
        </div>
       
      </div>
</div>
@endsection