<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use Auth;
use Str;
use Gate;
class WmCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('wm.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create' , Category::class);
        $categories = Category::where('parent_id', '=', NULL)->get();
        
        $allcategories=Category::all();

        $categories_dropdown = "<select name='parent_id' class='form-control'><option value='0'>Set as Main Category</option>";
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
        return view('wm.categories.create', compact('categories_dropdown','allcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create' , Category::class);
        $request->validate([
            'name' => 'required|unique:categories|max:100',
            'description' => 'required|max:200',
            'parent_id' => 'required',
            //'seodescription' => 'required|max:150',
            //'seokeywords' => 'required|max:150',
            'status' => 'required'
        ]);
        $data = request()->all();
        if($data['parent_id'] == 0)
        {
            $data['parent_id'] = NULL;
        }
        if(!$data['slug'])
        {
            $data['slug'] = Str::slug($data['name'].'-'.Str::random(2));
        }
        if($data['slug'])
        {
            $data['slug'] = Str::slug($data['slug']);
        }
        Category::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'parent_id' => $data['parent_id'],
            //'seodescription' => $data['seodescription'],
            //'seokeywords' => $data['seokeywords'],
            'slug' => $data['slug'],
            'status' => $data['status'],
        ]);
        return redirect(route('wm.categories.create'))->with('success', 'Category created successfully.');;
        
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
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('wm.categories.edit', compact('category'));
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
    public function destroy(Category $category)
    {
        if(count($category->series))
        {
            return 'Still there are series using this category.';
        }
        else if(count($category->posts))
        {
            return 'Still there are posts using this category.';
        }
        else
        {
            $category->delete();
            return redirect(route('wm.categories.index'));
        }
    }
}
