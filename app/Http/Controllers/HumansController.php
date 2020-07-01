<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class HumansController extends Controller
{
    public function index()
    {
        return view('pm.human.index');
    }
    public function about()
    {
        return view('pm.human.about');
    }
    public function privacy()
    {
        return view('pm.human.privacy');
    }
    public function contact()
    {
        return view('pm.human.contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required',
            'checkbox' => 'required',
        ]);
        Mail::to('azarguliyev@outlook.com')->send(new ContactMail(request('email'), request('name'), request('subject'), request('message')));
        return redirect(route('pm.human.contact'))->with('success', 'Your message has been sent to our Email server.');
    }
    public function portfolio()
    {
        return view('pm.human.portfolio');
    }
}