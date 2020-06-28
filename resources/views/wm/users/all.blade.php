@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Users</a></li>
              <li class="breadcrumb-item active" aria-current="page">All</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">Users</h1>
          </div>
        </div>
        <div class="col-md-12">
            <div class="card">
              <div class="card-header"></div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Roles</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                          @if(count($user->roles)>0)
                          @foreach($user->roles as $role)
                      <span class="badge badge-primary">* {{$role->name}}</span class="badge badge-primary">
                          @endforeach
                          @else
                          <span>no role</span>
                          @endif
                      </td>
                      <td>
                        {{Form::open(array('method' => 'DELETE', 'action' => ['WmUsersController@destroy', $user->id]))}}
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