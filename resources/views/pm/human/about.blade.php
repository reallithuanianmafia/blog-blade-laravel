@extends('layouts.pm')
@section('title')About @endsection
@section('metadescription')This is the section where you can find information about AZARGULIYEV COM @endsection
@section('metakeywords')about us, azarguliyev @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">About</li>
@endsection
@section('content')
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center"><img src="{{URL::asset('logos/logoforabout.png')}}" style="width: 5em;"></h1>
      </div>
    </div>
</div>
<div class="col-md-12 series-col">
    <div class="list-group" id="list-tab" role="tablist">
      <div class="list-group-item list-group-item-action series-list-group-item" id="list-home-list" data-toggle="list" role="tab" aria-controls="home">
        <div class="card-header">
          <span class="display-4">Who am I?</span> 
        </div>
        <div class="card-body">
        <p>My name is Azar Guliyev. Nice to meet you, @if(auth::check()) {{auth()->user()->name}}! @else dear Guest. @endif</p>
            <p>I am just 20 year old Full Stack Web Developer trying to survive in this life full of hustle. Also trying to help people in front-End and back-End programming. Decided to create a web app which will help people.</p>
        </div>
      </div>
    </div>
</div>
@endsection