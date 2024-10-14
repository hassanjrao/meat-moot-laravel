<?php

namespace App\Http\Controllers;

use App\Models\ContactUsRequest;
use App\Models\Extra;
use App\Models\FAQ;
use App\Models\FranchiseRequest;
use App\Models\FullCourseMeal;
use App\Models\HomePage;
use App\Models\MenuHighlight;
use App\Models\OurMenu;
use App\Models\Setting;
use App\Models\User;
use App\Notifications\ContactUsRequestNotification;
use App\Notifications\FranchiseRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menuHighlights = MenuHighlight::latest()->get();


        $halfMenuHighlights = ceil($menuHighlights->count() / 2);

        $menuHighlightsFirst = $menuHighlights->take($halfMenuHighlights);
        $menuHighlightsSecond = $menuHighlights->skip($halfMenuHighlights);

        $settings = Setting::first();

        $homePage = HomePage::first();

        return view('front.home', compact('menuHighlightsFirst', 'menuHighlightsSecond', 'settings', 'homePage'));
    }


    public function menu()
    {

        $menuHighlights = MenuHighlight::latest()->get();

        return view('front.menu', compact('menuHighlights'));
    }

    public function ourMenu()
    {

        $menus = OurMenu::latest()->get();
        $fullCourseMeals = FullCourseMeal::all();
        $extras = Extra::all();
        return view('front.our-menu', compact('menus', 'fullCourseMeals', 'extras'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function eventNews()
    {
        return view('front.events-and-news');
    }

    public function investors()
    {

        $faqs = FAQ::all();
        return view('front.investors', compact('faqs'));
    }

    public function franchise()
    {
        return view('front.franchise');
    }

    public function submitRequest(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'company' => 'nullable',
            'country_city' => 'nullable',
            'subject' => 'required',
            'description' => 'required',
        ]);


        $request = ContactUsRequest::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'company' => $request->company,
            'country_city' => $request->country_city,
            'subject' => $request->subject,
            'message' => $request->description,
        ]);

        // try {
            $admin = User::first();

            $admin->notify(new ContactUsRequestNotification($request));
        // } catch (\Exception $e) {
        //     Log::error('HomeContoller@submitRequest: ', [
        //         'message' => $e->getMessage(),
        //         'line' => $e->getLine(),
        //         'file' => $e->getFile(),
        //         'stack_trace' => $e->getTraceAsString(),
        //     ]);
        // }

        return redirect()->back()->withToastSuccess('Request submitted successfully, we will get back to you soon');
    }


    public function submitFranchiseInquiry(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'current_city' => 'required',
            'company_name' => 'nullable',
            'company_website' => 'nullable',
            'available_investment' => 'required',
            'preferred_location' => 'required',
            'interest_type' => 'required',
            'past_experience' => 'nullable',
            'lead_from' => 'required',
        ]);

       $request= FranchiseRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'current_city' => $request->current_city,
            'company_name' => $request->company_name,
            'company_website' => $request->company_website,
            'available_investment' => $request->available_investment,
            'preferred_location' => $request->preferred_location,
            'interest_type' => $request->interest_type,
            'past_experience' => $request->past_experience,
            'lead_from' => $request->lead_from,
        ]);


        try {
            $admin = User::first();

            $admin->notify(new FranchiseRequestNotification($request));
        } catch (\Exception $e) {
            Log::error('HomeContoller@submitFranchiseInquiry: ', [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
        }

        return redirect()->back()->withToastSuccess('Request submitted successfully, we will get back to you soon');
    }
}
