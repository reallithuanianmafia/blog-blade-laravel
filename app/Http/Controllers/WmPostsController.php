<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Series;
use App\Post;
use App\Tag;
use Str;
class WmPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('wm.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', '=', NULL)->get();
        $categories_dropdown = "<select name='category_id' class='form-control'><option selected disabled>Choose Category</option>";
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
        $tags = Tag::all();
        $series = Series::all();
        return view('wm.posts.create', compact('categories_dropdown', 'tags', 'series'));
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
        if(!$data['slug'])
        {
            $data['slug'] = Str::slug($data['name'].'-'.Str::random(5));
        }
        if($data['series_id'] == 0)
        {
            $data['series_id'] = NULL;
        }
        $post = Post::create([
            'name' => $data['name'],
            'content' => $data['content'],
            'description' => $data['description'],
            'keywords' => $data['keywords'],
            'category_id' => $data['category_id'],
            'series_id' => $data['series_id'],
            'user_id' => auth()->user()->id,
            'status' => $data['status'],
            'slug' => $data['slug'],
        ]);
        if(!empty($data['tags']))
        {
            $post->tags()->attach($data['tags']);
        }
        

        return redirect(route('wm.posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $id)
    {
        $post = $id;
        return view('wm.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $series = Series::all();
        $tags = Tag::all();
        return view('wm.posts.edit', compact('post', 'series', 'tags'));
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
    public function destroy(Post $id)
    {
        $id->delete();
        return redirect(route('wm.posts.index'));
    }
    public function testing()
    {

    }
    public function fetch(Request $request)
    {
        $query = $request->get('query');
        $data = DB::table('series')
            ->where('name', 'LIKE', '%{$query}%')
            ->get();
        $output = '<ul class="dropdown-menu" style="display:block;position:relative;">';
        foreach($data as $row)
        {
            $output .= '<li><a>'.$row->name.'</a></li>';
        }
        $output .= '</ul>';
        echo $output;
    }
}
