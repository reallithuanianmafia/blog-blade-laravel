@extends('layouts.pm')
@section('title')About @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active">Human</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 text-center">About</h1>
          <p class="lead text-center">This is the section where you can find data about us and privacy policy.</p>
        </div>
      </div>
</div>
<div class="col-md-12 series-col">
    <div class="list-group">
        <a href="{{route('pm.human.about')}}" class="list-group-item list-group-item-action">About</a>
        <a href="{{route('pm.human.privacy')}}" class="list-group-item list-group-item-action">Privacy</a>
        <a href="{{route('pm.human.contact')}}" class="list-group-item list-group-item-action">Contact</a>
      </div>
</div>
@endsection