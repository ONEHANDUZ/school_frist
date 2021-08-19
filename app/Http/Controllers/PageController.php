<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class PageController extends Controller
{
    
    public function home()
    {
        $slides = Slide::all();
        return view('school.home',compact('slides'));
    }

    public function news()
    {
        $slides = Slide::all();
        return view('school.news',compact('slides'));
    }

    public function needed()
    {
        $slides = Slide::all();
        return view('school.needed',compact('slides'));
    }

    public function contact()
    {
        $slides = Slide::all();
        return view('school.contact',compact('slides'));
    }
}
