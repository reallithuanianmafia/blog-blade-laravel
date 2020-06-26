@extends('layouts.pmseries')
@section('title')My Account @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.myaccount.index')}}">My Account</a></li>
<li class="breadcrumb-item active" aria-current="page">Dangerous</li>
@endsection
@section('sidebar')
    @include('pminc.myaccnavbarforsidebar')
@endsection
@section('content')
@section('content')
<div class="col-md-8">
    <div class="card" >
        <div class="card-body">
        <h5 class="card-title">Dangerous</h5>
          <div class="form-group">
            <input type="submit" value="Delete My Account" class="btn btn-danger">
          </div>
        </div>
      </div>
</div>
@endsection
@endsection