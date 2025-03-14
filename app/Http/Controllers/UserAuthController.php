<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //
    function login(Request $request){
        return ("login function");
    }
    function signup(Request $request){
        $input=$request->all();
        $request['password']=bcrypt($request['passsword']);
        $user=User::create($input);
        $success['token']=$user->createToken("My App")->plainTextToken;
        $success['name']=$user->name;
        return['success'=>"true", 'result'=>$success, "message"=>"User created Successfully" ];
    }
}
