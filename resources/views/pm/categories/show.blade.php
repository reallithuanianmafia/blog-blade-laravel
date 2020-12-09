@extends('layouts.pm')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.categories.index')}}">Categories</a></li>
@section('metadescription'){{Str::limit($category->description, 100)}} @endsection
@section('metakeywords'){{$category->name}} @endsection
<li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
@endsection
@section('title'){{$category->name}} @endsection
@section('content')
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">{{$category->name}}</h1>
        <p class="lead text-center">This is the section where you can find all posts and series related to {{$category->name}} category.</p>
      </div>
    </div>
</div>
<div class="col-md-12">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title">Series related to {{$category->name}}</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="list-group">
            @if(count($series)>0)
            @foreach($series as $oneserie)
            <a href="{{route('pm.series.show', $oneserie->slug)}}" class="list-group-item list-group-item-action">{{$oneserie->name}}</a>
            @endforeach
            @else
            <a class="list-group-item list-group-item-action">No data found.</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title">Posts related to {{$category->name}}</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <div class="list-group">
          @if(count($posts)>0)
          @foreach($posts as $post)
            <a href="@if($post->series()->exists()) {{route('pm.series.post', [$post->series->slug, $post->slug])}} @else {{route('pm.posts.show', $post->slug)}} @endif" class="list-group-item list-group-item-action">{{$post->name}}</a>
          @endforeach
          @else
            <a class="list-group-item list-group-item-action">No data found.</a>
          @endif
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection