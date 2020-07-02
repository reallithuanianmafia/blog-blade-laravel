<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use App\Tag;
class PmHomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->limit(10)->get();
        $series = Series::orderBy('id', 'DESC')->limit(10)->get();
        return view('pm.index', compact('posts', 'series'));
    }
    public function sitemap()
    {
        return response()->view('pm.sitemap')->header('Content-Type', 'text/xml');
    }
}
