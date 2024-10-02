<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }


    public function menu(){
        return view('front.menu');
    }

    public function ourMenu(){
        return view('front.our-menu');
    }

    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact');
    }

    public function eventNews(){
        return view('front.events-and-news');
    }

    public function investors(){
        return view('front.investors');
    }
}
