@extends('layouts.pm')
@section('title')Categories @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Categories</li>
@endsection
@section('content')
@if(count($categories)>0)
@foreach($categories as $category)
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">       
        <div class="card-body">
            <a href="{{route('pm.categories.show', $category->slug)}}" class="btn btn-primary form-control">{{$category->name}}</a>
          </div>
      </div>
</div>
@endforeach
@else
<div class="col-md-12">
    <div class="card">       
        <div class="card-body">
            <a href="#" class="btn btn-danger form-control">Nothing found in Database</a>
          </div>
      </div>
</div>
@endif
@endsection