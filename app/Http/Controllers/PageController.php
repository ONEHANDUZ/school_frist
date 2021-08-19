<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('school.home');
    }

    public function news()
    {
        return view('school.news');
    }

    public function needed()
    {
        return view('school.needed');
    }

    public function contact()
    {
        return view('school.contact');
    }
}
