<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use App\Tag;
class PmSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::all();
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
        return view('pm.series.show', compact('series'));
    }
}