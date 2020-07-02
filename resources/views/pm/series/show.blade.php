@extends('layouts.pmseries')
@section('title'){{$series->name}} @endsection
@section('metadescription'){{Str::limit($series->description, 100)}} @endsection
@section('metakeywords'){{$series->name}} @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.series.index')}}">Series</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$series->name}}</li>
@endsection
@section('content')
<div class="col-md-8 series-post-col">
  <div class="card article-card">
      <div class="card-body article-card-body">
        <a><h5 class="card-title text-center card-body-title">{{$series->name}}</h5></a>
        <p class="card-text card-body-description">{{$series->description}}</p>
      </div>
    </div>
</div>
@endsection
@section('sidebar')
    @include('pminc.playlistforsidebar')
@endsection