<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PmMyAccountsController extends Controller
{
    public function index()
    {
        return view('pm.myaccount.index');
    }
    public function newpassword()
    {
        return view('pm.myaccount.newpassword');
    }
    public function dangerous()
    {
        return view('pm.myaccount.dangerous');
    }
}
