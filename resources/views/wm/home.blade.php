@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">Private Office</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 2em;">
            <div class="card">
                <h5 class="card-header">Statistics</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$categories_count}} categories in database</li>
                  <li class="list-group-item">{{$series_count}} series in database</li>
                  <li class="list-group-item">{{$posts_count}} posts in database</li>
                  <li class="list-group-item">{{$tags_count}} tags in database</li>
                  <li class="list-group-item">{{$users_count}} users in database</li>
                </ul>
              </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Notifications</h5>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias officiis iure tempora laudantium neque modi ab perspiciatis sit! Sit, corporis eligendi dolorum rem aspernatur perferendis possimus facilis fuga vero impedit.
                </div>
                <div class="card-body">
                    This is some text within a card body.
                </div>
                <div class="card-body">
                    This is some text within a card body.
                </div>
                <div class="card-body">
                    This is some text within a card body.
                </div>
              </div>
        </div>
    </div>
</div>
@endsection