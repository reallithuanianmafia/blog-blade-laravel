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
          <a href="{{route('wm.tags.create')}}" class="btn btn-primary form-control">New</a>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tags as $tag)
                  <tr>
                    <th scope="row">{{$tag->id}}</th>
                    <td>{{$tag->name}}</td>
                    <td>
                      {{Form::open(array('method' => 'DELETE', 'action' => ['WmTagsController@destroy', $tag->id]))}}
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