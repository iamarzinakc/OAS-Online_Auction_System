<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = User::all();
        return view('admin.pages.profile.index',compact('user'));
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
    // Change password for the specified resource
    public function changePassword(Request $request, $id)
    {
        return view('admin.pages.profile.changePassword');
    }

    public function changePasswordProcess(Request $request, $id){
        $user = User::find(auth()->user()->password);
        if (!(Hash::check($request->get('oldPassword'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('oldPassword'), $request->get('newPassword')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        if(strcmp($request->get('newPassword'), $request->get('confPassword')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password and Conform password does not match.");
        }

        $user = Auth::user();
        $user->password = bcrypt($request->get('newPassword'));
        $user->save();
        return redirect()->back()->with("success","Password successfully changed!");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
       return view('admin.pages.profile.edit',compact('user'));
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
        $user = User::find($id);
        if ($request->hasFile('photo')){
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
            if(auth()->user()->photo!=""){
                if (file_exists('public/image/user/'.auth()->user()->photo)){
                    unlink('public/image/user/'.auth()->user()->photo);
                }
            }       
       
        move_uploaded_file($request->photo, 'public/image/user/'.$imageName); 

       $user->photo = $imageName;

        
            $user-> name = $request -> get('name');
            $user-> email = $request -> get('email');
            $user-> address = $request -> get('address');
            $user-> phone = $request -> get('phone');
        }
        else{
            $user-> name = $request -> get('name');
            $user-> email = $request -> get('email');
            $user-> address = $request -> get('address');
            $user-> phone = $request -> get('phone');
        }
            $user->save();
        return redirect()->route('profile.index')
            ->with('success','Profile Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
