<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use App\Tag;
use App\Comment;
class PmSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::orderBy('id', 'DESC')->get();
        return view('pm.series.index', compact('series'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $series = Series::where('slug', $slug)->firstOrFail();
        $posts = $series->posts()->orderBy('id')->get();;
        return view('pm.series.show', compact('series', 'posts'));
    }
    public function post($slug, $post)
    {
        $series = Series::where('slug', $slug)->firstOrFail();
        $posts = $series->posts;
        $post = $series->posts()->where('slug', $post)->firstOrFail();
        $comments = Comment::where('post_id', $post->id)->orderBy('id', 'DESC')->get();
        return view('pm.series.post', compact('series', 'posts', 'post', 'comments'));
    }
}
