<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function permission($id)
    {
        if($id == 1){
            return redirect()->route('403');
        }else{
            $roles       = Role::find($id);
            $permissions = Permission::all();

            return view('role.permission', compact('roles', 'permissions'));
        }
    }

    public function add()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addprocess(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:roles']);

        if( Role::create($request->only('name')) ) {
            flash('Role Added')->important();
        }

        return redirect()->route('roles.index');
    }

    public function edit($id)
    {
        if($id == 1){
            return redirect()->route('403');
        }else{
          $role  = Role::find($id);

          return view('role.edit', compact('role'));
        }
    }

    public function editprocess(Request $request, $id)
    {
        if($id == 1){
            return redirect()->route('403');
        }else{
            $this->validate($request, ['name' => 'required|unique:roles']);

            $role = Role::findOrFail($id);

            $role->fill($request->only('name'));

            $role->save();

            flash()->success('Role has been updated.')->important();

            return redirect()->route('roles.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpermission(Request $request, $id)
    {
        if($id == 1){
            return redirect()->route('403');
        }else{
            if($role = Role::findOrFail($id)) {
                // admin role has everything
                if($role->name === 'Administrator'||$role->name === 'Admin') {
                    $role->syncPermissions(Permission::all());
                    return redirect()->route('roles.index');
                }

                $permissions = $request->get('permissions', []);

                $role->syncPermissions($permissions);

                flash( $role->name . ' permissions has been updated.')->important();
            } else {
                flash()->error( 'Role with id '. $id .' note found.')->important();
            }

            return redirect()->route('roles.index');
        }
    }

    public function delete($id)
    {
        if($id == 1){
            return redirect()->route('403');
        }else{
            if ( Auth::user()->roles->implode('id', ', ') == $id ) {
                flash()->warning('Deletion of currently used Role is not allowed :(')->important();

                return redirect()->route('roles.index');
            }else{
                if( Role::findOrFail($id)->delete() ) {
                    flash()->success('Role has been deleted')->important();
                } else {
                    flash()->success('Role not deleted')->important();
                }
            }
        }

        return redirect()->route('roles.index');
    }
}
