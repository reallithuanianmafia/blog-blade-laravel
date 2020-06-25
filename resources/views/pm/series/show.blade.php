@extends('layouts.pmseries')
@section('title'){{$series->name}} @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.series.index')}}">Series</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$series->name}}</li>
@endsection
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          {{$series->name}}
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Special title treatment</h5>
          <p class="card-text">{{$series->description}}</p>
          <a href="#" class="btn btn-dark">Let's start</a>
        </div>
      </div>
</div>
@endsection
@section('sidebar')
  @include('pminc.playlistforsidebar')
@endsection