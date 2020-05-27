@extends('layouts.wm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-center">
                
                <div class="card-body">
                  <h5 class="card-title">You are about to create new series</h5>
                  <a href="{{route('wm.series.index')}}" class="btn btn-danger">Go Back</a>
                </div>
                
              </div>
        </div>
        <div class="col-md-12">
            {{Form::open(array('method' => 'POST', 'action' => 'WmSeriesController@store'))}}
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description">
                </div>
                  <div class="form-group">
                    <label for="category_id">Category</label>
                      {!! $categories_dropdown !!}
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            {{Form::close()}}
        </div>
        
    </div>
</div>
@endsection