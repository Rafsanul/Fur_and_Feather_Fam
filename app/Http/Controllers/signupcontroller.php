<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Question;

class signupcontroller 
{
    public function storeq(Request $req1)
    {
        $data = new Question;
        $data->Q=$req1->question;
        $data->save();

        return redirect ('/');
    }
    public function store(Request $req)
    {
    $data = new Register;
    $data->name = $req->name;
    $data->uname = $req->username;
    $data->mail = $req->email;
    $data->bday = $req->birthdate;
    $data->pass = $req->password; 
    $data->save();

    return redirect('/')->with('success', 'Signup successful! Please log in.');
    }
}
