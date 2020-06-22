@extends('layouts.pm')
@section('title')Categories @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Categories</li>
@endsection
@section('content')
<div class="col-12">
    <div class="list-group" id="list-tab" role="tablist">
    @if(count($categories)>0)
    @foreach($categories as $category)
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="{{route('pm.categories.show', $category->slug)}}" role="tab" aria-controls="home">
        <div class="card-header">
          <span class="badge badge-pill badge-dark">{{$category->name}}</span>
        </div>
        <div class="card-body">
          <p>{{$category->description}}</p>
        </div>
      </a>
    @endforeach
    @else
    </div>
</div>
<div class="col-md-12">
    <div class="card">       
        <div class="card-body">
            <a href="#" class="btn btn-danger form-control">Nothing found in Database</a>
          </div>
      </div>
</div>
@endif
@endsection