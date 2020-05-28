<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use App\Tag;
class PmCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('pm.categories.index', compact('categories'));
    }


    public function show($id)
    {
        $category = Category::where('slug', $slug);
        return view('pm.categories.show', compact('category'));
    }
}
