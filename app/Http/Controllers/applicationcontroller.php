<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\application;

class applicationcontroller extends Controller
{

    function req_app(Request $request){
        $application=new application();
        $application->name=$request->name;
        $application->username=$request->username;
        $application->userid=$request->userid;
        $application->NID=$request->NID;
        $application->email=$request->email;
        $application->phone=$request->phone;
        $application->age=$request->age;
        $application->dob=$request->dob;
        $application->passport=$request->passport;
        $application->gender=$request->gender;
        $application->petid=$request->petid;
        $application->address=$request->address;
        $application->save();
        if ($application){
            return "req-app function called";
        }
        else{
            return "operation failed";
        }

    }

}