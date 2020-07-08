@extends('layouts.pm')
@section('title')Portfolio @endsection
@section('metadescription')This is the section where you can find information about AZARGULIYEV COM @endsection
@section('metakeywords')portfolio,works,azarguliyev @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 text-center">Portfolio</h1>
          <p class="lead text-center">This is the section where you can find my and my colleague's works and inquire in contact section.</p>
        </div>
      </div>
</div>

<div class="col-md-12 col-margin">
    <div class="card text-center">
        <div class="card-header">
          Azar
        </div>
        <div class="card-body">
          <h5 class="card-title">Full Stack Web Developer</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-dark">More about Azar's works</a>
        </div>
      </div>
</div>

<div class="col-md-12 col-margin">
    <div class="card text-center">
        <div class="card-header">
          Kamran
        </div>
        <div class="card-body">
          <h5 class="card-title">Logo&Design</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-dark">More about Kamran's works</a>
        </div>
      </div>
</div>


@endsection