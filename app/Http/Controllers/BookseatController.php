<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Bookseat;

class BookseatController extends Controller
{
    public function create()
    {
        // Fetch all available courses
        $courses = Course::all();
        return view('book-seat', compact('courses'));
    }

    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'course' => 'required|exists:courses,id',
        ]);

        // Store booking details
        Bookseat::create([
            'name' => $request->name,
            'email' => $request->email,
            'course_id' => $request->course,
        ]);

        return back()->with('success', 'Your seat has been successfully booked!');
    }
}
