<div class="col-md-12 series-col">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action series-list-group-item" id="list-home-list" data-toggle="list" href="{{route('pm.series.show', $oneserie->slug)}}" role="tab" aria-controls="home">
        <div class="card-header">
          <strong>{{$oneserie->name}}</strong> <span class="badge badge-pill badge-dark">{{$oneserie->category->name}}</span>
        </div>
        <div class="card-body">
          <p>{{$oneserie->description}}</p>
         <div style="background: #7171711a; padding: 0 0.5em; height: 100%">
          <p class="lead">{{$oneserie->posts()->count()}} posts inside</p>
         </div>
          
        </div>
      </a>
    </div>
</div>