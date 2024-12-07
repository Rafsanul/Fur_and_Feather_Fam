<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;
use Illuminate\Support\Facades\Session;


class ProfileController extends Controller
{
    // Show the profile form
    public function showProfile()
    {
        // Get the logged-in user
        // $user = Auth::user();
        // $user = Session::get('user');
        $user = Register::where('id',Session::get('user')->id)->first();
        // Return the profile view with user data
        return view('userprofile', compact('user'));
    }

    
    public function updateProfile(Request $request){
        $user = Register::where('id',Session::get('user')->id)->first();
        $user->name = $request->name;
        $user->mail = $request->mail;
        
        $user->pass = $request->pass;
    
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');

    }
    public function showUserDetails()
    {
        // Get the logged-in user's data
        $user = Register::where('id', Session::get('user')->id)->first();
        
        // Return the user details view with user data
        return view('profile', compact('user'));
    }
    
}

