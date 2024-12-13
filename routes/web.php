<?php

use App\Http\Controllers\HttpController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [UserController::class, 'getUsers']);

// using model 
Route::get('students', [StudentController::class, 'getStudents']);

// for fatching data through api 
Route::get('apidata', [HttpController::class, 'getData']);