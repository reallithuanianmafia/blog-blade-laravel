<div class="col-md-4 playlist">
    <div class="list-group">
        <a class="list-group-item list-group-item-action text-center">Playlist</a>
        @if(count($posts)>0)
        @foreach($posts as $post)
            <a href="{{route('pm.series.post', [$series->slug, $post->slug])}}" class="list-group-item list-group-item-action {{ Request::is('series/'.$series->slug.'/'.$post->slug) ? 'active btn-dark' : '' }}">{{$post->name}}</a>
        @endforeach
        @else
        <a class="list-group-item list-group-item-action">No post has been added to {{$series->name}}</a>
        @endif
    </div>
</div>