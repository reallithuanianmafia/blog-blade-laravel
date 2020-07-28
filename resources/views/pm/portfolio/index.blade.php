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
          <p class="lead text-center">This is the section where you can find my and my colleague's works and <span class="badge badge-primary">inquire in contact section</span>.</p>
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
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">Fully Functional Blog. Seo included. (azarguliyev.com)</a>
            <a href="#" class="list-group-item list-group-item-action">Fully Functional E-commerce platform. (subdomain will be provided soon)</a>
            <a href="#" class="list-group-item list-group-item-action">Fully Functional Stock Management System. (subdomain will be provided soon)</a>
            <a href="#" class="list-group-item list-group-item-action">Responsive mobile-friendly Web Design. (subdomain will be provided soon)</a>
            <a href="#" class="list-group-item list-group-item-action">Responsive mobile-friendly Web Design 2. (subdomain will be provided soon)</a>
            <a href="#" class="list-group-item list-group-item-action">Responsive mobile-friendly Web Design 3. (subdomain will be provided soon)</a>
            <a href="#" class="list-group-item list-group-item-action">Responsive mobile-friendly Web Design 4. (subdomain will be provided soon)</a>
          </div>
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
          <div class="col-md-12 col-margin">
          <img width="70%" class="img-fluid" src="{{URL::asset('portfoliostuff/kamran/1.png')}}">
          </div>
          <div class="col-md-12 col-margin">
            <img width="70%" class="img-fluid" src="{{URL::asset('portfoliostuff/kamran/2.png')}}">
          </div>
          <div class="col-md-12 col-margin">
            <img width="70%" class="img-fluid" src="{{URL::asset('portfoliostuff/kamran/3.png')}}">
          </div>
          <a href="#" class="btn btn-dark">More about Kamran's works</a>
        </div>
      </div>
</div>
@endsection