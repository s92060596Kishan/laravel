<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('user.user-create');

    }

    public function showUser()
    {
        //
          $users = User::all();
          //       dd($users);
        return view('user.user-list',compact('users'));
    }

    public function editUser()
    {
        //
        $users= User::all();
        return view('user.user-edit',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //vaildation
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users'
        ]);
        $new_user           = new User;
        $new_user->name     = $request->name;
        $new_user->email    = $request->email;
        $new_user->password = Hash::make('password');
        $new_user->save();
        return redirect()->back()->with('success','New User Created Successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        $update        = User::find($id);
        $update->name  = $request->name;
        $update->email = $request->email;
        $update->save();

        return redirect()->back()->with('done','User Updated Successfuly');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('delete','delete');
    }
}