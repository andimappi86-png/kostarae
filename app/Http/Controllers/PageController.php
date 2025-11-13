<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function help()
    {
        return view('pages.help');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
