<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Series;
use App\Post;
use App\Tag;
use App\User;
class WmHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_count = Category::count();
        $series_count = Series::count();
        $posts_count = Post::count();
        $tags_count = Tag::count();
        $users_count = User::count();
        //return auth()->user()->hasRole('name', ['administrator']);
        return view('wm.home', compact('categories_count', 'series_count', 'posts_count', 'tags_count', 'users_count'));
    }

    public function test()
    {
        return auth()->user()->hasRole('content creator');
    }

}
