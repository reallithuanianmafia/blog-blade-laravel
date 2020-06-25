<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;
class PmCommentsController extends Controller
{
    public function store(Request $request, $postslug)
    {
        $post = Post::where('slug', $postslug)->first();
        if(!$post)
        {
            return redirect(route('pm.posts.index'));
        }
        $validatedData = $request->validate([
            'content' => 'required|max:500',
        ]);
        $comment = new Comment;
        $comment->content = $request->input('content');
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->save();
        return redirect(route('pm.posts.show', $post->slug));
    }
}
