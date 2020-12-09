@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Users</a></li>
              <li class="breadcrumb-item active" aria-current="page">All</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">User System</h1>
            <p class="lead">{{$totalregistered}} users in total</p>
          </div>
        </div>
        <div class="col-md-12 card-col">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">All Users</h5>
                  <p>{{$totalregistered}} registered user(s).</p>
                  <a href="{{route('wm.users.all')}}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-md-12 card-col">
          <div class="card">
              <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p>{{$totalusers}} User(s).</p>
                <a href="{{route('wm.users.users')}}" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
      </div>
      <div class="col-md-12 card-col">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Content Creators</h5>
              <p>{{$totalcontentcreators}} Content Creator(s).</p>
              <a href="{{route('wm.users.contentcreators')}}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-12 card-col">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrator(s)</h5>
            <p>{{$totaladministrators}} Administrators.</p>
            <a href="{{route('wm.users.administrators')}}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
  </div>
    </div>
</div>
@endsection