<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    function getData(){
        // echo "data";
        $data = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $data = $data->status();
        return $data;
        // return view('httpdata', ['data'=>json_decode($data)]);
    }
}
