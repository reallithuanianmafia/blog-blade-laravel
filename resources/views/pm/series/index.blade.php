@extends('layouts.pm')
@section('title')Series @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Series</li>
@endsection
@section('content')
@if(count($series)>0)
@foreach($series as $oneseries)
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">       
        <div class="card-body">
            <a href="{{route('pm.series.show', $oneseries->slug)}}" class="btn btn-primary form-control">{{$oneseries->name}}</a>
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