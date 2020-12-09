@extends('layouts.pm')
@section('title')Series @endsection
@section('metadescription')This is the section where you can find all series posted in AZARGULIYEV COM @endsection
@section('metakeywords')all series, azarguliyev @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Series</li>
@endsection
@section('content')
<div class="col-md-12">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Series</h1>
        <p class="lead text-center">This is the section where you can find all series.</p>
      </div>
    </div>
</div>
@if(count($series)>0)
@foreach($series as $oneserie)
  @include('pminc.seriesshowcase')
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



