<?php

namespace App\Http\Controllers;

use App\Models\PermissionGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Role::with('permissions')->get();

        return view('role.list',compact('role'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $permissionGroups = PermissionGroup::with('permissions')->get();
         $users =User::get();
         return view('role.create',compact('permissionGroups','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles             =  new Role;
        $roles->guard_name = 'web';
        $roles->name       = $request->user_name;
        $roles->save();
        $roles->syncPermissions($request->permission_ids);
        return redirect()->back()->with('success','Role created with selected Permissions');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $role=Role::with('permissions')->find($id);
        $permissionGroups = PermissionGroup::with('permissions')->get();
        return view('role.edit',compact('permissionGroups','role'));


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
        // return $request;
        $role =Role::find($id);
        $role->name =$request->role;
        $role->save();
        $role->syncPermissions($request->permission_ids);
        return redirect()->back()->with('success','Permission updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role =Role::find($id);
        $role->delete();
        return redirect()->back()->with('done','Details has been deleted');
    }
}