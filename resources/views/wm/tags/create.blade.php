@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('wm.tags.index')}}">Tags</a></li>
              <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">New Tag</h1>
          </div>
        </div>
        <div class="col-md-12">
                <div class="card" style="margin-bottom: 3%;">
                  <div class="card-header">
                    <h5>Main Information</h5>
                    <button class="btn btn-dark btn-sm" id="add-more-tags">Add More Tags</button>
                  </div>
                  {{Form::open(array('method' => 'POST', 'action' => 'WmTagsController@store'))}}
                  <div class="card-body" id="card-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name[]">
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="form-group">
                      <input type="submit" id="submit" class="btn btn-primary" value="Submit">
                  </div>
                  </div>
                  {{Form::close()}}
                </div>
                
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{URL::asset('pm/js/azar.js')}}"></script>
@endsection