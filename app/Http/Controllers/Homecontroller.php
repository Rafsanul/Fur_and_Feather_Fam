<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller 
{
    public function Homepage(){
        return view('homepage');
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function petcare(){
        return view('petcare');
    }
    public function contact(){
        return view('contact');
    }

}
