<div class="{{ Route::is('pm.posts.show', $post->slug) ? 'col-md-12' : 'col-md-8' }} comment-col comment-col-margin" id="comments">
    <div class="card comment-card">
        <div class="card-body comment-card-body">
            <a href="#comments" class="card-title comment-title"><h5>Comments on {{$post->name}}</h5></a>
             <div class="col-md-12 content-col">
                <div class="form-group">
                    <ul class="comment-list">
                        @if(count($comments)>0)
                        @foreach($comments as $comment)
                        <li>
                            <div class="comment">
                                <h6>{{$comment->user->name}}</h6>
                                <small class="form-text text-muted">{{ date("F j, Y, g:i a",strtotime($comment->created_at)) }}</small>
                                <p>{{$comment->content}}</p>
                            </div>
                        </li>
                        @endforeach
                        @else
                        <li>
                            No comment has been added.
                        </li>
                        @endif
                    </ul>
                 </div>
             </div>
        </div>
        <div class="card-body newcomment-card-body" id="leavecomment">
            <a href="#leavecomment" class="card-title newcomment-title"><h5>Leave a comment</h5></a>
             @if(Auth::check())
{{Form::open(array('method' => 'POST', 'action' => ['PmCommentsController@store', $post->slug]))}}
             <div class="col-md-12 content-col">
                <div class="form-group">
                    <textarea class="form-control newcomment-textarea" id="exampleFormControlTextarea1" rows="3" placeholder="Article is horrible, by the way.." name="content"></textarea>
                    <small class="form-text text-muted newcomment-small">{{auth()->user()->name}}, your name will be visible in the comment.</small>
                </div>
             </div>
             <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="Submit">
                </div>
             </div>
{{Form::close()}}
             @else
             <div class="col-md-12 content-col">
                    <div class="alert alert-danger" role="alert">
                    In order to put a comment, you need to sign-in to system. <a href="{{route('login')}}" class="btn btn-dark btn-sm">Login</a>
                    </div>
             </div>
             @endif
        </div>
      </div>
</div>