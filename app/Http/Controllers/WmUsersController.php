<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\User;
class WmUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalregistered = User::count();
        $totalusers = User::whereHas('roles', function (Builder $query) {
            $query->where('role_id', 1);
        })->count();
        $totalcontentcreators = User::whereHas('roles', function (Builder $query) {
            $query->where('role_id', 2);
        })->count();
        $totaladministrators = User::whereHas('roles', function (Builder $query) {
            $query->where('role_id', 3);
        })->count();
        return view('wm.users.index', compact('totalregistered', 'totalusers', 'totalcontentcreators', 'totaladministrators'));
    }
    public function all()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('wm.users.all', compact('users'));
    }
    public function users()
    {
        $users = User::whereHas('roles', function (Builder $query) {
            $query->where('role_id', 1);
        })->get();
        return view('wm.users.all', compact('users'));
    }
    public function contentcreators()
    {
        $users = User::whereHas('roles', function (Builder $query) {
            $query->where('role_id', 2);
        })->get();
        return view('wm.users.all', compact('users'));
    }
    public function administrators()
    {
        $users = User::whereHas('roles', function (Builder $query) {
            $query->where('role_id', 3);
        })->get();
        return view('wm.users.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
    public function destroy(User $user)
    {
        if(auth()->user()->id == $user->id)
        {
            return 'u can not delete urself u dumbass';
        }
        $user->delete();
        return 'deleted';
    }
}
