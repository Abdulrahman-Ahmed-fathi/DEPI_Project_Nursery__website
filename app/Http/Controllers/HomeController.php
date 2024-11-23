<?php

namespace App\Http\Controllers;
use App\Models\Facility;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Bookseat;
class HomeController extends Controller
{
    public function Home()
    {  $facilities = Facility::all();
        $teachers = Teacher::all();
        $testimonials = Testimonial::all();
        $courses = Course::all(); 
        return view('home', compact('facilities','teachers','testimonials','courses'));
       
    }

}
