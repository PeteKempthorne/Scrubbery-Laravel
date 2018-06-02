<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'The Scrubbery Zone';
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About The Scrubbery Zone';
        return view('pages.about')->with('title', $title);
    }

    public function contact()
    {
        $title = 'Contact The Scrubbery Zone';
        return view('pages.contact')->with('title', $title);
    }

    public function admin()
    {
        $title = 'The Scrubbery Admin Zone';
        return view('pages.admin')->with('title', $title);
    }

    public function loggerz()
    {
        $title = 'The Scrubbery Zone';
        return view('pages.loggerz')->with('title', $title);
    }
}
