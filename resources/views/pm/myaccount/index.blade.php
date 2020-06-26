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
        <h5 class="card-title">Basic Information</h5>
          <div class="form-group">
            <label for="name">Name</label>
          <input type="text" class="form-control" id="name" value="{{auth()->user()->name}}">
          </div>
          <div class="form-group">
            <label for="name">Email</label>
          <input type="email" class="form-control" id="name" value="{{auth()->user()->email}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Bio</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-dark">
          </div>
        </div>
      </div>
</div>
@endsection
@endsection