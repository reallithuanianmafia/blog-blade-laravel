@extends('layouts.pmseries')
@section('title')My Account @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.myaccount.index')}}">My Account</a></li>
<li class="breadcrumb-item active" aria-current="page">New Password</li>
@endsection
@section('sidebar')
    @include('pminc.myaccnavbarforsidebar')
@endsection
@section('content')
@section('content')
<div class="col-md-8">
    <div class="card" >
      <div class="card-header">
        <h5 class="card-title">New Password Request</h5>
        @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
      </div>
        <div class="card-body">
          {{Form::open(array('method' => 'PUT', 'action' => 'PmMyAccountsController@newpasswordstore'))}}
          <div class="form-group">
          <label for="oldpassword">Old Password</label>
          <input type="password" class="form-control" name="oldpassword">
          </div>
          <div class="form-group">
          <label for="newpassword">New Password</label>
          <input type="password" class="form-control" name="newpassword">
          </div>
          <div class="form-group">
          <label for="newpasswordconfirmation">New Password Confirmation</label>
          <input type="password" class="form-control" name="newpasswordconfirmation">
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-dark">
          </div>
          {{Form::close()}}
        </div>
      </div>
</div>
@endsection
@endsection