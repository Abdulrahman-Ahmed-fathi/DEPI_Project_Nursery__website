<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurBlogController extends Controller
{
    public function ourBlog()  // Ensure this method is lowercase if that's how it's called in the route
    {
        // Your logic for handling the 'teachers' page
        return view('ourblog');  // Make sure this view exists
    }
}

