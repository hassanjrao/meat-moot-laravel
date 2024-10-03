<?php

namespace App\Http\Controllers;

use App\Models\MenuHighlight;
use App\Models\OurMenu;
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

        $menuHighlights=MenuHighlight::latest()->get();

        return view('front.menu',compact('menuHighlights'));
    }

    public function ourMenu(){

        $menus=OurMenu::latest()->get();
        return view('front.our-menu',compact('menus'));
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
