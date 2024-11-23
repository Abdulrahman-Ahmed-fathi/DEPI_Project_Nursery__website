<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classes() 
    {
        $courses = Course::all(); 
        return view('classes', compact('courses'));
       
    }
}

