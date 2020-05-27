@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('wm.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('wm.tags.index')}}">Tags</a></li>
              <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
          </nav>
        </div>

        <div class="col-md-12">
          {{Form::open(array('method' => 'POST', 'action' => 'WmTagsController@store'))}}
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Main Information</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary form-control" value="Submit">
                    </div>
                  </div>
                </div>
                {{Form::close()}}
        </div>
    </div>
</div>
@endsection