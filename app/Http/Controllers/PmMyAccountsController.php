<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PmMyAccountsController extends Controller
{
    public function index()
    {
        return view('pm.myaccount.index');
    }
}
