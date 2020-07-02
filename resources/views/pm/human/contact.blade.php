@extends('layouts.pm')
@section('title')Contact @endsection
@section('metadescription')Contact Form section for guests and users. @endsection
@section('metakeywords')contact, contact form, azarguliyev @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.human.index')}}">Human</a></li>
<li class="breadcrumb-item active">Contact</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 text-center">Contact</h1>
          <p class="lead text-center">Do you have any idea, question or just something to say?</p>
        </div>
      </div>
</div>

<div class="col-md-12 col-margin">
    <div class="card">
        <h5 class="card-header">Contact Form</h5>
        <div class="card-header">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          @if(session('success'))
            <div class="alert alert-success">
              <p class="lead text-center">{{ session('success') }}</p>
            </div>
          @endif
        </div>
        <div class="card-body">
            {{Form::open(array('method' => 'POST', 'action' => 'HumansController@store'))}}
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                  <small class="form-text text-muted">We'll never share your name with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject">
                  <small class="form-text text-muted">We'll never share your name with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                <div class="form-group">
                    <label for="message" >Message</label>
                    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check" name="checkbox" >
                  <label class="form-check-label" for="check">Check me out</label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark">
                </div>
              {{Form::close()}}
        </div>
      </div>
</div>
@endsection