<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
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
}
