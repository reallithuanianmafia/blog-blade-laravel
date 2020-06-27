<div class="col-md-6 article-col">
    <div class="card article-card">
        <div class="card-body card_body_fixed_height article-card-body">
            <a href="@if($post->series()->exists()) {{route('pm.series.post', [$post->series->slug, $post->slug])}} @else {{route('pm.posts.show', $post->slug)}} @endif" class="card-title card-body-title"><h5>{{$post->name}}</h5></a>
            <p class="card-text card-body-description">{{$post->description}}</p>
        </div>
        <ul class="list-group list-group-flush card-list-group">
            <li class="list-group-item article-category"><a href="{{route('pm.categories.show', $post->category->slug)}}"><ion-icon name="briefcase-sharp"></ion-icon> {{$post->category->name}}</a></li>
            @if($post->series()->exists()) 
            <li class="list-group-item article-category"><a href="{{route('pm.series.post', [$post->series->name, $post->slug])}}"><ion-icon name="albums"></ion-icon> {{$post->series->name}} <span class="badge badge-pill badge-dark">Series</span></a></li>
            @else 
            <li class="list-group-item article-category"><a href="{{route('pm.posts.show', $post->slug)}}"><ion-icon name="albums"></ion-icon> Single Article </a></li> 
            @endif
            <li class="list-group-item article-comment"><a><ion-icon name="chatbubbles-sharp"></ion-icon> {{$post->commentsCount()}} Comments</a></li>
            <li class="list-group-item article-author"><a><ion-icon name="person-sharp"></ion-icon> {{$post->user->name}}</a></li>
            <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> {{ date("F j, Y, g:i a",strtotime($post->created_at)) }}</p></li>
        </ul>
        <div class="card-footer">
          <a class="btn btn-dark read-more" href="@if($post->series()->exists()) {{route('pm.series.post', [$post->series->slug, $post->slug])}} @else {{route('pm.posts.show', $post->slug)}} @endif">Read More</a>
        </div>
    </div>
  </div>