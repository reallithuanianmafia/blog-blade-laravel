@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('wm.categories.index')}}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="display-4">Edit Category</h1>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">{{$category->name}} </h5>
            <div class="card-body">
                {{Form::open(array('method' => "PUT", 'action' => ['WmCategoriesController@update', $category->slug]))}}
                    <div class="form-group"> 
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" value="{{$category->description}}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" value="{{$category->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status">
                          <option>Active</option>
                          <option>Inactive</option>
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