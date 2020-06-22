@extends('layouts.pm')
@section('title')Series @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Series</li>
@endsection
@section('content')
<div class="col-12">
    <div class="list-group" id="list-tab" role="tablist">
    @if(count($series)>0)
    @foreach($series as $oneserie)
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="{{route('pm.series.show', $oneserie->slug)}}" role="tab" aria-controls="home">
        <div class="card-header">
          {{$oneserie->name}} <span class="badge badge-pill badge-dark">{{$oneserie->category->name}}</span>
        </div>
        <div class="card-body">
          <p>{{$oneserie->description}}</p>
        </div>
      </a>
    @endforeach
    </div>
</div>
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