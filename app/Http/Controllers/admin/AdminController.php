<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;  // Add the Admin model to query the 'admin_info' table

class AdminController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle the login logic
    public function login(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'username' => 'required|string',  // Validate username as a string
            'password' => 'required|string',  // Validate password as a string
        ]);

        // Check if the admin exists in the 'admin_info' table
        $admin = Admin::where('username', $request->username)->first();

        if ($admin && $admin->password === $request->password) {
            // If the admin exists and the password matches, authenticate the user
            Auth::loginUsingId($admin->id); // Log the user in

            // Redirect to the intended route (e.g., admin pets dashboard)
            return redirect()->intended('/admin/pets');
        }

        // If authentication fails, return back with an error message
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
