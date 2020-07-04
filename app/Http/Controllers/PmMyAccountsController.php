<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\SavedPost;
use App\Like;
use Hash;
use URL;
class PmMyAccountsController extends Controller
{
    public function index()
    {
        return view('pm.myaccount.index');
    }
    public function basicsettings()
    {
        return view('pm.myaccount.basicsettings');
    }
    
    public function newpassword()
    {
        return view('pm.myaccount.newpassword');
    }
    public function newpasswordstore(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required|min:8',
            'newpassword' => 'required|min:8',
            'newpasswordconfirmation' => 'required|min:8',
        ]);
        $getoldpasswordfromdatabase = auth()->user()->password;
        $getoldpassword = $request->input('oldpassword');
        $getnewpassword = $request->input('newpassword');
        $getnewpasswordconfirmation = $request->input('newpasswordconfirmation');

        if(Hash::check($getoldpassword, auth()->user()->password))
        {
            if($getnewpassword === $getnewpasswordconfirmation)
            {
                $newpasswordfordatabase = Hash::make($getnewpassword);
                $user = User::find(auth()->user()->id);
                $user->password = $newpasswordfordatabase;
                $user->save();
                return redirect(route('pm.myaccount.newpassword'))->with('success', 'You updated your password.');
            }
            else
            {
                return 'no';
            }
        }
        else
        {
            return 'old password do not match';
        }
    }
    public function dangerous()
    {
        return view('pm.myaccount.dangerous');
    }
    public function dangerousstore()
    {
        $user = User::find(auth()->user()->id);
        if($user->email == 'azarguliyev@outlook.com')
        {
            return 'no';
        }
        else
        {
            $user->delete();
            return redirect(route('pm.home'));
        }
    }
    public function savedpostsindex()
    {   
        $savedposts = SavedPost::with('post')
          ->where('user_id', auth()->user()->id)
          ->orderby('id', 'desc')->get();

        return view('pm.myaccount.savedposts', compact('savedposts'));
    }
    public function savedpostsstore(Request $request, Post $post)
    {
        $user = auth()->user();
        $savedposts = SavedPost::where('user_id', auth()->user()->id)
            ->where('post_id', $post->id)->first();
        if(!$savedposts)
        {
            $savedpost = new SavedPost;
            $savedpost->user_id = auth()->user()->id;
            $savedpost->post_id = $post->id;
            $savedpost->save();
            return redirect(URL::previous());
        }
        else
        {
            $savedposts->delete();
            return redirect(URL::previous());
        }
        return redirect(URL::previous());

    }
    public function likedpostsindex()
    {   
        $savedposts = Like::with('post')
          ->where('user_id', auth()->user()->id)
          ->orderby('id', 'desc')->get();

        return view('pm.myaccount.likedposts', compact('savedposts'));
    }
    public function likedpostsstore(Request $request, Post $post)
    {
        $user = auth()->user();
        $likedpost = Like::where('user_id', auth()->user()->id)
            ->where('post_id', $post->id)->first();
        if(!$likedpost)
        {
            $likedpost = new Like;
            $likedpost->user_id = auth()->user()->id;
            $likedpost->post_id = $post->id;
            $likedpost->save();
            return redirect(URL::previous());
        }
        else
        {
            $likedpost->delete();
            return redirect(URL::previous());
        }
        return redirect(URL::previous());

    }
}
