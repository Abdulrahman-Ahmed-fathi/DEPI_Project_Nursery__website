<?php

namespace App\Http\Controllers;
use App\Models\Facility;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()  
    {
        $facilities = Facility::all();
        $teachers = Teacher::all();

        return view('about', compact('facilities','teachers'));
       
    }
}
