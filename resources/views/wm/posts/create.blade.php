@extends('layouts.wm')
@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('wm.posts.index')}}">Posts</a></li>
              <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">New Post</h1>
          </div>
        </div>
        <div class="col-md-12">
          {{Form::open(array('method' => 'POST', 'action' => 'WmPostsController@store'))}}
                <div class="card" style="margin-bottom: 3%;">
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
                    <div class="form-group">
                      <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                    </div>
                    <div class="form-group">
                      <label for="content">Content</label>
                    <textarea name="content" id="editor">{{old('content')}}</textarea>
                    </div>
                    <script>
                      ClassicEditor
                          .create( document.querySelector( '#editor' ) )
                          .catch( error => {
                              console.error( error );
                          } );
                  </script>
                    <div class="form-group">
                      <label for="category">Category</label>
                      {!! $categories_dropdown !!}
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Series (Optional)</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <select class="form-control" name="series_id">
                        <option selected value="0">Without series.</option>
                        @foreach($series as $oneserie)
                          <option value="{{$oneserie->id}}">{{$oneserie->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Optional</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Slug</label>
                      <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                      <small> As a default, slug will be automatically set by name. You can also customize it.</small>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Tags</h5>
                  <div class="card-body">
                    <div class="row">
                      @if(count($tags)>0)
                      @foreach($tags as $tag)
                      <div class="col-md-3">
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="{{$tag->id}}" value="{{$tag->id}}" name="tags[]">
                          <label class="form-check-label" for="{{$tag->id}}">{{$tag->name}}</label>
                        </div>
                      </div>
                     @endforeach
                     @endif
                    </div>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header">Search engine optimization (SEO)</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="seodescription" value="{{old('seodescription')}}">
                    </div>
                    <div class="form-group">
                      <label>Keywords</label>
                      <input type="text" class="form-control" name="seokeywords" value="{{old('seokeywords')}}">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
                  </div>
                </div>
                
                {{Form::close()}}
        </div>
    </div>
</div>
@endsection