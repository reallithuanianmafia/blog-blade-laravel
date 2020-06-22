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
  <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
  <button>Get External Content</button>
  </div>

        <div class="col-md-12">
          {{Form::open(array('method' => 'POST', 'action' => 'WmPostsController@store'))}}
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Main Information</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="description">Content</label>
                      <input type="text" class="form-control" id="content" name="content">
                    </div>
                    <div class="form-group">
                      <label for="description">Category</label>
                      {!! $categories_dropdown !!}
                    </div>
                    <div class="form-group">
                      <label for="description">Status</label>
                      <select class="form-control" name="status">
                        <option value="0">0 Signal</option>
                        <option value="1">Activate</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Series (Optional)</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Slug</label>
                      <input type="text" class="form-control" name="series_name" id="series_name" placeholder="Enter the series name">
                      <div id="seriesList"></div>
                      <small> As a default, slug will be automatically set by name. You can also customize it.</small>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Optional</h5>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Slug</label>
                      <input type="text" class="form-control" name="slug">
                      <small> As a default, slug will be automatically set by name. You can also customize it.</small>
                    </div>
                  </div>
                </div>
                <div class="card" style="margin-bottom: 3%;">
                  <h5 class="card-header">Tags</h5>
                  <div class="card-body">
                    <div class="row">
                      @if(count($tags)>0)
                      @foreach($tags as $tag)
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
                      <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                      <label>Keywords</label>
                      <input type="text" class="form-control" name="keywords">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
                  </div>
                </div>
                
                {{Form::close()}}
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $.ajax({url: "{{URL::asset('demo_test.txt')}}", success: function(result){
      $("#div1").html(result);
    }});
  });
});
</script>


<script>
  $(document).ready(function(){
    $('#series_name').keyup(function(){
      var query = $(this).val();
      if(query != '')
      {
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method: "POST",
          data: {query:query, _token:_token},
          success:function(data)
          {
            $('#seriesList').fadeIn();
            $('#seriesList').html(data);
          }
        })
      }
    })
  })
</script>

@endsection