@extends('layouts.pm')
@section('title')Home @endsection
@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection
@section('content')
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Popular Posts</h1>
        <p class="lead text-center">This is the section where recently added posts will appear.</p>
      </div>
    </div>
</div>
@if(count($posts)>0)
@foreach($posts as $post)
<div class="col-md-6 article-col">
  <div class="card article-card">
      <div class="card-body card_body_fixed_height article-card-body">
          <a href="{{route('pm.posts.show', $post->slug)}}" class="card-title article-title"><h5>{{$post->name}}</h5></a>
          <p class="card-text">{{$post->description}}</p>
      </div>
      <ul class="list-group list-group-flush card-list-group">
          <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> {{$post->category->name}}</a></li>
          <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
          <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> {{$post->user->name}}</a></li>
          <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> {{ date("F j, Y, g:i a",strtotime($post->created_at)) }}</p></li>
      </ul>
  </div>
</div>
@endforeach
@else
<div class="col-md-12 error-column">
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

<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Popular Series</h1>
        <p class="lead text-center">This is the section where recently added series will appear.</p>
      </div>
    </div>
</div>
@if(count($series)>0)
@foreach($series as $oneserie)
<div class="col-md-12">
  <div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="{{route('pm.series.show', $oneserie->slug)}}" role="tab" aria-controls="home">
      <div class="card-header">
        {{$oneserie->name}} <span class="badge badge-pill badge-dark">{{$oneserie->category->name}}</span>
      </div>
      <div class="card-body">
        <p>{{$oneserie->description}}</p>
      </div>
    </a>
  </div>
  </div>
@endforeach
@else
<div class="col-md-12 error-column">
<div class="card">
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <hr>
            <p>No series has been added or something is wrong with database. Sad situation.</p>
        </div>
    </div>
  </div>
</div>
@endif

@endsection