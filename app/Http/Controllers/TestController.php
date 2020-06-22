<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class TestController extends Controller
{
    public function index()
    {
        return view('wm.tests.index');
    }
}
