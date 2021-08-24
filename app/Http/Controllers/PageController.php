<?php

namespace App\Http\Controllers;

use App\Models\NewList;
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
        $lists = NewList::orderByDesc('updated_at')->paginate(10);
        return view('school.news',compact('slides','lists'));
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
    public function profile()
    {
        $slides = Slide::all();
        return view('school.profile',compact('slides'));
    }
}
