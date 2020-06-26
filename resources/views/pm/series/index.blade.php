@extends('layouts.pm')
@section('title')Posts @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Series</li>
@endsection
@section('content')
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



