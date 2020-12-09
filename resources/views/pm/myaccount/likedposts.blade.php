@extends('layouts.pmseries')
@section('title')Saved Posts @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.myaccount.index')}}">My Account</a></li>
<li class="breadcrumb-item active" aria-current="page">Liked Posts</li>
@endsection
@section('sidebar')
    @include('pminc.myaccnavbarforsidebar')
@endsection
@section('content')
<div class="col-md-8">
    <div class="col-md-12" style="padding: 0;">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Liked Posts</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($savedposts as $savedpost)
                            <div class="col-md-12 col-lg-6 article-col">
                    <div class="card article-card">
                        <div class="card-body card_body_fixed_height article-card-body">
                            <a href="@if($savedpost->post->series()->exists()) {{route('pm.series.post', [$savedpost->post->series->slug, $savedpost->post->slug])}} @else {{route('pm.posts.show', $savedpost->post->slug)}} @endif" class="card-title card-body-title"><h5>{{$savedpost->post->name}}</h5></a>
                            <p class="card-text card-body-description">{{$savedpost->post->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush card-list-group">
                            <li class="list-group-item article-category"><a href="{{route('pm.categories.show', $savedpost->post->category->slug)}}"><ion-icon name="briefcase-sharp"></ion-icon> {{$savedpost->post->category->name}}</a></li>
                            @if($savedpost->post->series()->exists()) 
                            <li class="list-group-item article-category"><a href="{{route('pm.series.post', [$savedpost->post->series->name, $savedpost->post->slug])}}"><ion-icon name="albums"></ion-icon> {{$savedpost->post->series->name}} <span class="badge badge-pill badge-dark">Series</span></a></li>
                            @else 
                            <li class="list-group-item article-category"><a href="{{route('pm.posts.show', $savedpost->post->slug)}}"><ion-icon name="albums"></ion-icon> Single Article </a></li> 
                            @endif
                            <li class="list-group-item article-comment"><a><ion-icon name="chatbubbles-sharp"></ion-icon> {{$savedpost->post->commentsCount()}} Comments</a></li>
                            <li class="list-group-item article-author"><a><ion-icon name="person-sharp"></ion-icon> {{$savedpost->post->user->name}}</a></li>
                            <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> {{ date("F j, Y, g:i a",strtotime($savedpost->post->created_at)) }}</p></li>
                        </ul>
                        <div class="card-footer">
                          <a class="btn btn-dark read-more" href="@if($savedpost->post->series()->exists()) {{route('pm.series.post', [$savedpost->post->series->slug, $savedpost->post->slug])}} @else {{route('pm.posts.show', $savedpost->post->slug)}} @endif">Read More</a>
                        </div>
                    </div>
                  </div>
                    @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
