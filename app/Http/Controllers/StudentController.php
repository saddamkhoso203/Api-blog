<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    function
list(){
    return user::all();
}}

// function AddUser( Request $request){
// return ("Add Student method");
// }

function AddUser(){
    return( "Add student method");}