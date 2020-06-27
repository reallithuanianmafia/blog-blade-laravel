<div class="col-md-12 category-col">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action category-list-group-item" id="list-home-list" data-toggle="list" href="{{route('pm.categories.show', $category->slug)}}" role="tab" aria-controls="home">
        <div class="card-header">
          <h3>{{$category->name}}</h1>
        </div>
        <div class="card-body">
          <p>{{$category->description}}</p>
        </div>
      </a>
    </div>
</div>