@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tags</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="display-4">Tags</h1>
          <p class="lead">{{count($tags)}} tags in total</p>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-header"><a class="btn btn-primary btn-sm" href="{{route('wm.tags.create')}}">New</a></div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tags as $tag)
                <tr>
                  <td>{{$tag->name}}</td>
                  <td>{{$tag->description}}</td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                  <td>
                    {{Form::open(array('method' => 'DELETE', 'action' => ['WmTagsController@destroy', $tag->id]))}}
                      <input type="submit" class="btn btn-danger" value="Delete">
                    {{Form::close()}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection