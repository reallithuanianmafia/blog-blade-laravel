<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PmSearchController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'query' => 'required|max:100',
        ]);
        $query = $request->input('query');
        $results = Post::where('name', 'LIKE', "%$query%")->get();
        return view('pm.search.index', compact('results'));
    }
}
