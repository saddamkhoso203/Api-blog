<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function(Request $request){
    return ['name'=>'Saddam Khoso', 'age'=>'25'];
});

Route::get('/users',[StudentController::class,'list']);
Route::post('AddUser',[StudentController::class,'AddUser']);
