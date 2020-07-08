<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use Str;
class WmSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::all();
        return view('wm.series.index', compact('series'));
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
        $request->validate([
            'name' => 'required|unique:series|max:100',
            'description' => 'required|max:200',
            'parent_id' => 'required',
            'seodescription' => 'required|max:150',
            'seokeywords' => 'required|max:150',
            'status' => 'required'
        ]);
        $data = request()->all();
        if(!$data['slug'])
        {
            $data['slug'] = Str::slug($data['name'].'-'.Str::random(2));
        }
        Series::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
            'seodescription' => $data['seodescription'],
            'seokeywords' => $data['seokeywords'],
            'slug' => $data['slug'],
            'status' => $data['status']
        ]);
        return redirect(route('wm.series.create'))->with('success', 'Series created successfully.');
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
    public function edit($slug)
    {
        $oneserie = Series::where('slug', $slug)->firstOrFail();
        return view('wm.series.edit', compact('oneserie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        return $slug;
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
