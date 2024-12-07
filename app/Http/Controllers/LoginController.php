<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController 
{
    public function loginPage()
    {
        return view('login'); 
    }

    public function authenticate(Request $request)
    {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = Register::where('uname', $request->username)->first();

        if ($user && $user->pass === $request->password) {
            // Manually logging in the user by putting user info in session
            Session::put('user', $user);

            return redirect('/userhome');
        } else {
            return back()->withErrors(['Invalid credentials! Please try again.']);
        }
    }

    public function logout()
    {
        
        Session::forget('user');

        return redirect('/');
    }
    


}