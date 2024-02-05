<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use spatie\permission\Models\Role;


class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('dashboard.role.index',compact('roles'));
    }
    public function create(){
        return view('dashboard.role.create');
    }
    public function store(Request $request){

        $validated=$request->validate(['name'=>['required','min:3']]);
        Role::create($validated);
        return redirect()->route('admin.roles.index')->with('success','Role created successfully');
    }
        public function edit(int $id){
            $role = Role::find($id);
            return view('dashboard.role.edit',compact('role'));
    }
    public function update(Request $request, $id){
        $role = Role::find($id);
        $validated=$request->validate(['name'=>['required']]);
        $role->update($validated);


        return redirect()->route('admin.roles.index')->with('success','Role Updated successfully');

    }
    public function destroy($id){
        $role=Role::find($id);
        $role->delete();


        return redirect()->back()->with('success','Role deleted successfully');

}
}
