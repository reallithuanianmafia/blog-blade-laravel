@extends('layouts.pmseries')
@section('title')My Account @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Account</li>
@endsection
@section('sidebar')
    @include('pminc.myaccnavbarforsidebar')
@endsection
@section('content')
@section('content')
<div class="col-md-8">
    <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="text-center">
            <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
</div>
@endsection
@endsection