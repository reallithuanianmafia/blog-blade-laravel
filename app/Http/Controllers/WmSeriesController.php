<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
class WmSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allseries = Series::all();
        return view('wm.series.index', compact('allseries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', '=', NULL)->get();
        $categories_dropdown = "<select name='category_id' class='form-control'>";
        foreach($categories as $category)
        {
            $categories_dropdown .= "<option value='$category->id'>$category->name</option>";
            $subcategories = Category::where('parent_id', $category->id)->get();
            foreach($subcategories as $subcategory)
            {
                $categories_dropdown .= "<option value='$subcategory->id'> -- $subcategory->name</option>";

            }

            
        }
        $categories_dropdown .= "</select>";

        return view('wm.series.create', compact('categories_dropdown'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();
        Series::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
        ]);
        return redirect(route('wm.series.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Series $id)
    {
        $id->delete();
        return redirect(route('wm.series.index'));
    }
}
