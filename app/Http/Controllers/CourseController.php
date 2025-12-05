<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function basics()
    {
        return view('courses.basics-of-computer');
    }

    public function tally()
    {
        return view('courses.tally-accounting');
    }

    public function programming()
    {
        return view('courses.c-cpp-programming');
    }

    public function webDevelopment()
    {
        return view('courses.web-development');
    }

    public function graphicDesign()
    {
        return view('courses.graphic-designing');
    }
}
