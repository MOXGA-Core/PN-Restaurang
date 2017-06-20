<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $courses = Course::with('products')->get();
        $promotion = Promotion::first();

        return view('frontend.home.index', compact('courses', 'promotion'));
    }
}
