@extends('layouts.pm')
@section('title')Categories @endsection
@section('metadescription')This is the section where you can find all categories in AZARGULIYEV COM @endsection
@section('metakeywords')all categories, azarguliyev @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Categories</li>
@endsection
@section('content')
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Categories</h1>
        <p class="lead text-center">This is the section where you can find all categories.</p>
      </div>
    </div>
</div>
@if(count($categories)>0)
@foreach($categories as $category)
  @include('pminc.categoriesshowcase')
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



