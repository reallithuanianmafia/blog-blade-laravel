@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Posts</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <a href="{{route('wm.posts.create')}}" class="btn btn-primary form-control">New</a>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Series</th>
                    <th>Show</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                  <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->name}}</td>
                    <td>{{Str::limit($post->content,100)}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->seriesCheck()}}</td>
                    <td><a href="{{route('wm.posts.show', $post->id)}}" class="btn btn-primary">Show</a></td>
                    <td>
                      {{Form::open(array('method' => 'DELETE', 'action' => ['WmPostsController@destroy', $post->id]))}}
                        <button class="btn btn-danger">Delete</button>
                      {{Form::close()}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection