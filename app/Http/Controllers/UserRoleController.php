<?php

namespace App\Http\Controllers;

use App\Models\User_role;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_role = User_role::all();
        return view('admin.pages.user_role.index',compact('user_role'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user_role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'role' => ['required', 'unique:user_roles'],
        ]);

        $user_role = User_role::create($request->all());
        return redirect()->route('user_role.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully Added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function show(User_role $user_role)
    {
       return view('admin.pages.user_role.show',compact('user_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function edit(User_role $user_role)
    {
        
        return view('admin.pages.user_role.edit',compact('user_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_role $user_role)
    {
        $validated = $request->validate([
            
            'role' => ['required', 'unique:user_roles'],
        ]);
        
        $user_role->update($request->all());
        return redirect()->route('user_role.index')
        ->with([
            'icon' => 'success',
            'message' => 'Sucessfully updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_role $user_role)
    {
        $user_role->delete();
       
        return redirect()->route('user_role.index')
            ->with('success','User Role deleted successfully');
    }

     // ========================= Status Update Controller =======================

     public function onStatus(Request $request, $id)
     {
         $status = User_role::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('user_role.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = User_role::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('user_role.index')
             ->with('success','Status DeActive successfully.');
     }
}
