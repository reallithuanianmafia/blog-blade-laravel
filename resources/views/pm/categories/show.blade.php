@extends('layouts.pm')
@section('title')Example Category Name @endsection
@section('content')
<div class="col-md-12 article-col">
    <div class="card">
      <div class="card-header">
        {{$category->name}}'s Posts and Series
      </div>
       
        <div class="card-body">
            <a href="#" class="btn btn-primary">HTML</a>
          </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
</div>
@endsection