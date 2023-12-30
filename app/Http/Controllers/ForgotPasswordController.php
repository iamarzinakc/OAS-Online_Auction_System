<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    // ======================================== Forgot Password ===================================
    public function forgotPassword()
    {
        return view('admin.pages.forgotPassword.forgotPassword');
    }

    public function forgotPasswordProcess(Request $request)
    {
        
        $request->validate([
            'email' =>'required|email',
        ]);

        Session::put('email', $request->get('email'));
        $user = User::find($user->email);
        
        if (check($request->get('email'), User::user()->email)) {
            // The email matches 
        }
        $opt-> User::create();
        $otp -> otp = $request->get(rand(123456, 999999));
        $otp->save();

        return redirect()->route('forgotPassword.generateotp');

    }

    // ==================================  Generate Otp  ===========================================
    public function generateotp()
        {
            return view('admin.pages.forgotPassword.generateotp');
        }

        public function generateotpProcess()
        {
            $user = User::find($user->email);
            if (check($user->email, User::user()->email)) 
            {
                // The email matches 
                return redirect()->route('forgotPassword.resetPassword');                
            }
        }
        // ================================================ Reset password ==========================
    public function resetPassword()
    {
        return view('admin.pages.forgotPassword.resetpassword');
    }

    public function resetPasswordProcess(Request $request)
    {

        $request->validate([
            'email' =>'required|email',
            'password' =>'required|confirmed|min:6',
            'password_confirmation' =>'required|same:password'
        ]);
        
        $user = User::find($user->email);
        $user->password = bcrypt($request->new_password);
        $user->confirm_password = bcrypt($request->new_confirm_password);
        $user->save();
        return redirect()->route('forgotPassword.resetPassword');

    }
    
}
