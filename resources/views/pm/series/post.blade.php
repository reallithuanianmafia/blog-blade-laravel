@extends('layouts.pmseries')
@section('title'){{$series->name}} @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.series.index')}}">Series</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.series.show', $post->series->slug)}}">{{$series->name}}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
@endsection
@section('content')
<div class="col-md-8 series-post-col">
    <div class="card article-card">
        <div class="card-body article-card-body">
          <a><h5 class="card-title text-center card-body-title">{{$post->name}}</h5></a>
          <p class="card-text card-body-description">{{$post->description}}</p>
          <p class="card-text card-body-description">{!! $post->content !!}</p>
        </div>
        <ul class="list-group list-group-flush card-list-group">
            <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> {{$post->category->name}}</a></li>
            @if($post->series()->exists()) 
            <li class="list-group-item article-category"><a href="{{route('pm.series.post', [$post->series->name, $post->slug])}}"><ion-icon name="albums"></ion-icon> {{$post->series->name}} <span class="badge badge-pill badge-dark">Series</span></a></li>
            @else 
            <li class="list-group-item article-category"><a href="{{route('pm.posts.show', $post->slug)}}"><ion-icon name="albums"></ion-icon> Single Article </a></li> 
            @endif
            <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> {{$post->commentsCount()}} Comments</a></li>
            <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> {{$post->user->name}}</a></li>
            <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> {{ date("F j, Y, g:i a",strtotime($post->created_at)) }}</p></li>
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
@endsection
@section('sidebar')
    @include('pminc.playlistforsidebar')
@endsection
@section('comments')
    @include('pminc.comments')
@endsection