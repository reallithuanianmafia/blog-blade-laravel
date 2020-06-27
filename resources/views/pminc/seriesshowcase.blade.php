<div class="col-md-12 series-col">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action series-list-group-item" id="list-home-list" data-toggle="list" href="{{route('pm.series.show', $oneserie->slug)}}" role="tab" aria-controls="home">
        <div class="card-header">
          {{$oneserie->name}} <span class="badge badge-pill badge-dark">{{$oneserie->category->name}}</span>
        </div>
        <div class="card-body">
          <p>{{$oneserie->description}}</p>
        </div>
      </a>
    </div>
</div>