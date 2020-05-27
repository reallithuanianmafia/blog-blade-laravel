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
        <a href="{{route('wm.series.create')}}" class="btn btn-primary form-control">New</a>
      </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th>Function</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allseries as $series)
                  <tr>
                    <th scope="row">{{$series->id}}</th>
                    <td>{{$series->name}}</td>
                    <td>{{$series->description}}</td>
                    <td><span class="badge badge-primary">{{$series->category->name}}</span></td>
                    <td>
                      {{Form::open(array('method' => 'DELETE', 'action' => ['WmSeriesController@destroy', $series->id]))}}
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
@endsection