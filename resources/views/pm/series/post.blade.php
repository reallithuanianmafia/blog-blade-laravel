@extends('layouts.pmseries')
@section('title'){{$post->name}} @endsection
@section('metadescription'){{Str::limit($post->description, 100)}} @endsection
@section('metakeywords'){{$post->keywords}} @endsection
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
@endsection
@section('sidebar')
    @include('pminc.playlistforsidebar')
@endsection
@section('comments')
    @include('pminc.comments')
@endsection