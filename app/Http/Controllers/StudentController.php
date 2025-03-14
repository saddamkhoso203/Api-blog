<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Users;
use App\Models\Post;

class StudentController extends Controller
{
    function
list(){
    return user::all();
}


function AddUser( Request $request){
  $user = new User;
  $user->name = $request->name;
$user->email = $request->email;
$user->phone = $request->phone;
if($user->save){
    return ['result'=>'user added'];
}else{
    return['result'=>'user  dintnot added'];
}
    }

function UpdateUser( Request $request){
$user =User::find($request->id);
$user->name = $request->name;
$user->email = $request->email;
$user->phone = $request->phone;
if($user->save){
    return ['result'=>'user updated'];
}else{
    return['result'=>'user not updated'];
}
}
function DeleteUser($id) {
    $user =User ::destroy($id); 
    if($user){
        return['result'=>'user deleted'];
    
    }else{
        return['result'=>'user not deleted'];
    }
}
}
