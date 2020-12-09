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
  <div class="" style="margin-top: 2em;">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action disabled text-center">Notifications</a>
    </div>
</div>
<div class="" style="margin-top: 2em;">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action disabled text-center">My Later Reading List</a>
  </div>
</div>
</div>
@endsection
@endsection