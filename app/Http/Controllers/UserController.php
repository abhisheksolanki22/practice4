<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getUsers(){
        
        // without model 

        // echo "User function";
        $users = DB::select('select * from users');
        // return $users;
        return view('users', ['users'=>$users]);
    }
}
