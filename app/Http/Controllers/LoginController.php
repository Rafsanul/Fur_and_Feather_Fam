<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register; 
use Illuminate\Support\Facades\Session;

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

        
        $user = Register::where('uname', $request->username)->where('pass', $request->password)->first();

        if ($user) {
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