<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    // if your table name and model name is same so you don't need to define table name it will connect automaticaly 

    // if your table name is diff from model name so you can define table name here
    // protected $table = 'college_students'; 

    // you can make function also 
    function test(){
        return "This is dummy data";
    }
}
