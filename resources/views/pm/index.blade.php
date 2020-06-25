@extends('layouts.pm')
@section('title')Home @endsection
@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection
@section('content')
@if(count($posts)>0)
@foreach($posts as $post)
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 article-col">
    <div class="card article-card">
        <div class="card-body card_body_fixed_height article-card-body">
            <a href="{{route('pm.posts.show', $post->slug)}}" class="card-title article-title"><h5>{{$post->name}}</h5></a>
        <p class="card-text">{{$post->description}}</p>
        </div>
        <ul class="list-group list-group-flush card-list-group">
            <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> {{$post->category->name}}</a></li>
            <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
            <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> {{$post->user->name}}</a></li>
            <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> {{$post->created_at}}</p></li>
        </ul>
        
    </div>
</div>
@endforeach
@else
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <hr>
                <p>No post has been added or something is wrong with database. Sad situation.</p>
            </div>
        </div>
      </div>
</div>
@endif
@endsection