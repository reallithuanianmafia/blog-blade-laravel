@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('wm.series.index')}}">Series</a></li>
            <li class="breadcrumb-item active" aria-current="page">New</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="display-4">New Series</h1>
        </div>
      </div>
      <div class="col-md-12 card-col">
        <div class="card">
          <h5 class="card-header">Main Information</h5>
          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
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
            <div class="card-body">
              {{Form::open(array('method' => 'POST', 'action' => 'WmSeriesController@store'))}}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
              </div>
                <div class="form-group">
                  <label for="category_id">Category</label>
                    {!! $categories_dropdown !!}
                </div>
                <div class="form-group">
                  <label for="seodescription">Seo Meta Description</label>
                  <input type="text" class="form-control" id="seodescription" name="seodescription" >
                  <small class="form-text text-muted">Optional</small>
                </div>
                <div class="form-group">
                  <label for="seokeywords">Seo Meta Keywords</label>
                  <input type="text" class="form-control" id="seokeywords" name="seokeywords" >
                  <small class="form-text text-muted">Optional</small>
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" >
                  <small class="form-text text-muted">Optional</small>
              </div>
              <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="status" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          {{Form::close()}}
            </div>
          </div>
      </div>

        
    </div>
</div>
@endsection