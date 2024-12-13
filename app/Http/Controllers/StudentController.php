<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents(){

        // fetching function from model 
        $data = new \App\Models\Student;
        echo $data->test();

        // echo "students data";
        $students = \App\Models\Student::all();
        // return $students;
        return view('students', ['students'=>$students]);
    }
}
