<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
class GalleryController extends Controller
{
    // Display the gallery
    public function index()
    {
        $categories = Category::with('images')->get();
        return view('gallery', compact('categories'));
    }

}