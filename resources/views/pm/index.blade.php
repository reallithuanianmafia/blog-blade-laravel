@extends('layouts.pm')
@section('title')Home @endsection
@section('metadescription')An ordinary Full Stack Web Developer who is trying to write posts related to programming. @endsection
@section('metakeywords')web programming, php, full stack web development @endsection
@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection
@section('content')
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Popular Posts</h1>
        <p class="lead text-center">This is the section where recently added posts will appear.</p>
      </div>
    </div>
</div>
@if(count($posts)>0)
@foreach($posts as $post)
  @include('pminc.postshowcase')
@endforeach
@else
<div class="col-md-12 error-column">
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
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Popular Series</h1>
        <p class="lead text-center">This is the section where recently added series will appear.</p>
      </div>
    </div>
</div>
@if(count($series)>0)
@foreach($series as $oneserie)
  @include('pminc.seriesshowcase')
@endforeach
@else
<div class="col-md-12 error-column">
<div class="card">
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <hr>
            <p>No series has been added or something is wrong with database. Sad situation.</p>
        </div>
    </div>
  </div>
</div>
@endif

@endsection