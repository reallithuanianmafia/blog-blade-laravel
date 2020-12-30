<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SeriesResource;
use App\Http\Resources\PostResource;
use App\Category;
use App\Series;
use App\Post;
class APIController extends Controller
{
    public function categories()
    {
        return CategoryResource::collection(Category::where('status',1)->get());
    }
    public function series(){
        return SeriesResource::collection(Series::where('status',1)->get());
    }
    public function posts(){
        return PostResource::collection(Post::where('status',1)->get());
    }
}
