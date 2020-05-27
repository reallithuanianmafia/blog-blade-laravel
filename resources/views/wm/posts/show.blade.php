@extends('layouts.wm')
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
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Main Information</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$post->name}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{$post->content}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Category</label>
                    <input type="text" class="form-control" value="{{$post->category->name}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Status</label>
                      <input type="text" class="form-control" value="{{$post->status}}">
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Optional</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$post->slug}}">
                      <small> As a default, slug will be automatically set by name. You can also customize it.</small>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Tags</h5>
                  <div class="card-body">
                    <div class="row">
                      @if(count($post->tags)>0)
                      @foreach($post->tags as $tag)
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
                    <input type="text" class="form-control" name="description" value="{{$post->description}}">
                    </div>
                    <div class="form-group">
                      <label>Keywords</label>
                    <input type="text" class="form-control" name="keywords" value="{{$post->keywords}}">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection