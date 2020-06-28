@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Series</li>
          </ol>
        </nav>
      </div>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">Series</h1>
          </div>
        </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-header"><a class="btn btn-primary btn-sm" href="{{route('wm.series.create')}}">New</a></div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($series as $oneserie)
                <tr>
                  <td>{{$oneserie->name}}</td>
                <td>{{$oneserie->category->name}}</td>
                  <td><a href="{{route('wm.series.edit', $oneserie->slug)}}" class="btn btn-warning">Edit</a></td>
                  <td>
                    {{Form::open(array('method' => 'DELETE', 'action' => ['WmCategoriesController@destroy', $oneserie->id]))}}
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