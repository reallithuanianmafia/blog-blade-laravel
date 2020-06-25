@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-12">
        <a href="{{route('wm.categories.create')}}" class="btn btn-primary form-control">New</a>
      </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Parent ID</th>
                    <th>Function</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{!!$category->checkParent()!!}</td>
                    <td>
                      {{Form::open(array('method' => 'DELETE', 'action' => ['WmCategoriesController@destroy', $category->id]))}}
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