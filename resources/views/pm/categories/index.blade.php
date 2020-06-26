@extends('layouts.pm')
@section('title')Posts @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Categories</li>
@endsection
@section('content')
@if(count($categories)>0)
@foreach($categories as $category)
<div class="col-md-12">
<div class="list-group" id="list-tab" role="tablist">
  <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="{{route('pm.categories.show', $category->slug)}}" role="tab" aria-controls="home">
    <div class="card-header">
      {{$category->name}}
    </div>
    <div class="card-body">
      <p>{{$category->description}}</p>
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



