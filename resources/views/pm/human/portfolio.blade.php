@extends('layouts.pm')
@section('title')Portfolio @endsection
@section('metadescription')My Portfolio.@endsection
@section('metakeywords')portfolio, works, azarguliyev @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.human.index')}}">Human</a></li>
<li class="breadcrumb-item active">Portfolio</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 text-center">About</h1>
          <p class="lead text-center">This is the section where you can find data about us and privacy policy.</p>
        </div>
      </div>
</div>
<div class="col-md-12 series-col">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action series-list-group-item" id="list-home-list" data-toggle="list" href="http://127.0.0.1:8000/series/laravel-60-making-form-application" role="tab" aria-controls="home">
        <div class="card-header">
          <span class="display-4">Who am I?</span> 
        </div>
        <div class="card-body">
        <p>My name is Azar Guliyev. Nice to meet you, @if(auth::check()) {{auth()->user()->name}}! @else dear Guest. @endif</p>
            <p>I am just 20 year old Full Stack Web Developer trying to survive in this life full of hustle. Also trying to help people in front-End and back-End programming. Decided to create a web app which will help people.</p>
        </div>
      </a>
    </div>
</div>
<div class="col-md-12 series-col">
    <div class="list-group" id="list-tab" role="tablist">
      <div class="list-group-item list-group-item-action series-list-group-item" id="list-home-list" data-toggle="list" href="http://127.0.0.1:8000/series/laravel-60-making-form-application" role="tab" aria-controls="home">
        <div class="card-header">
          <span class="display-4">Privacy Policy</span> <span class="badge badge-pill badge-danger">Very Important</span>
        </div>
        <div class="card-body">
            <ul>
                <li>
                    <h4>Privacy Statement</h4>
                    <p>The University of California, Berkeley is committed to protecting the privacy and
                        accuracy of confidential information to the extent possible, subject to provisions of
                        state and federal law.
                    </p>
                </li>
                <li>
                    <h4>Concerned about privacy? We are too.</h4>
                    <p>Although there are many applications and websites that collect information and
                        other statistics about their users, we DO NOT collect any personal information
                        about you when you visit this web site.</p>
                    </p>
                </li>
                <li>
                    <h4>What happens if the privacy statement changes?</h4>
                    <p>This Privacy Statement was last revised on (Date) . We may change this Privacy
                        Statement at any time and for any reason. We encourage you to review this Privacy
                        Statement each time you visit the web site.
                        If we decide to make a significant change to our Privacy Statement, we will post a
                        notice on the homepage of our web site for a period of time after the change is made.
                    </p>
                </li>
                <li>
                    <h4>What about privacy on other web sites?</h4>
                    <p>This web site may contain links to other web sites. Some of those web sites may be
                        operated by by third parties. We provide the links for your convenience, but we do
                        not review, control, or monitor the privacy practices of web sites operated by
                        others.
                        We are not responsible for the performance of web sites operated by third parties
                        or for your business dealings with them. Therefore, whenever you leave this web
                        site we recommend that you review each web site&#39;s privacy practices and make
                        your own conclusions regarding the adequacy of these practices.
                    </p>
                </li>
                <li>
                    <h4>How to contact us</h4>
                    <p><a type="button" class="btn btn-dark btn-sm" href="{{route('pm.human.contact')}}">Contact Us</a>
                    </p>
                </li>
            </ul>
        </div>

        <div class="card-footer">
            <div class="col-md-12">
                <a href="#" class="btn btn-dark form-control">Download Privacy Policy as PDF</a>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection