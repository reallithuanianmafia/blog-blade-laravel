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
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><p>{{$category->name}}</p><p>{{$category->description}}</p></a>
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