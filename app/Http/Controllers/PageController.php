<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        # code...

        return view('pages.home');
    }

 
    
    public function about()
    {
        # code...

        return view('pages.about');
    }

 

    public function contact()
    {
        # code...

        return view('pages.contact');
    }

 

    public function services()
    {
        # code...

        return view('pages.services');
    }

 

    public function store()
    {
        # code...

        return view('pages.store');
    }

 

    public function blog()
    {
        # code...

        return view('pages.blog');
    }

 

    public function post()
    {
        # code...

        return view('pages.post');
    }

 

    public function gallery()
    {
        # code...

        return view('pages.gallery');
    }

 
}

