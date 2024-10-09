<?php

namespace App\Http\Controllers;

use App\Models\ContactUsRequest;
use App\Models\Extra;
use App\Models\FAQ;
use App\Models\FullCourseMeal;
use App\Models\MenuHighlight;
use App\Models\OurMenu;
use App\Models\Setting;
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
        $menuHighlights=MenuHighlight::latest()->get();


        $halfMenuHighlights=ceil($menuHighlights->count()/2);

        $menuHighlightsFirst=$menuHighlights->take($halfMenuHighlights);
        $menuHighlightsSecond=$menuHighlights->skip($halfMenuHighlights);

        $settings=Setting::first();

        return view('front.home',compact('menuHighlightsFirst','menuHighlightsSecond','settings'));
    }


    public function menu(){

        $menuHighlights=MenuHighlight::latest()->get();

        return view('front.menu',compact('menuHighlights'));
    }

    public function ourMenu(){

        $menus=OurMenu::latest()->get();
        $fullCourseMeals=FullCourseMeal::all();
        $extras=Extra::all();
        return view('front.our-menu',compact('menus','fullCourseMeals','extras'));
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

        $faqs=FAQ::all();
        return view('front.investors',compact('faqs'));
    }

    public function submitRequest(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email'=>'required|email',
            'mobile'=>'required|numeric',
            'company'=>'nullable',
            'country_city'=>'nullable',
            'subject'=>'required',
            'description'=>'required',
        ]);


        ContactUsRequest::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'company'=>$request->company,
            'country_city'=>$request->country_city,
            'subject'=>$request->subject,
            'message'=>$request->description,
        ]);

        return redirect()->back()->withToastSuccess('Request submitted successfully, we will get back to you soon');
    }
}
