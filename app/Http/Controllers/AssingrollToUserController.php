<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AssingrollToUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name  = User::get();
        $roles = Role::get();
        $users = User::with('roles')->get();
        return view('assing-role.assing-role',compact('name','roles','users'));
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
        //
        $request->validate([
            'user_name'=>'required',
            'role'=>'required',
        ]);
        $user = User::find($request->user_name);
        $role = Role::find($request->role);
        $user->assignRole($role->name);
        return redirect()->back()->with('success',"$role->name Role Assigned to $user->name Successfuly");
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
            'user_name'=>'required',
            'role'=>'required',
        ]);
        $user = User::find($id);

        $user->syncRoles($request->role);
        return redirect()->back()->with('done',"Role Updated to $user->name Successfuly");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        //
        $user = User::find($id);
        $user->removeRole($request->role);
        return redirect()->back()->with('done','Details has been deleted');
    }
}