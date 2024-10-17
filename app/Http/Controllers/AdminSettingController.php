<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=Setting::first();

        return view('admin.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'facebook'=>'nullable',
            'twitter'=>'nullable',
            'instagram'=>'nullable',
            'youtube'=>'nullable',
            'tiktok'=>'nullable',
            'tripadvisor'=>'nullable',
            'whatsapp'=>'nullable',
            'location'=>'nullable',
            'city'=>'nullable',
            'logo_main'=>'nullable|image',
            'logo_footer'=>'nullable|image',
            'lets_meat_logo'=>'nullable|image',
            'google_rating'=>'required',
            'google_total_reviews'=>'required',
            'daily_customers'=>'required',
            'total_branches'=>'required',
        ]);


        $setting=Setting::findorfail($id);

        $setting->update([
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'tiktok'=>$request->tiktok,
            'tripadvisor'=>$request->tripadvisor,
            'whatsapp'=>$request->whatsapp,
            'location'=>$request->location,
            'city'=>$request->city,
            'google_rating'=>$request->google_rating,
            'google_total_reviews'=>$request->google_total_reviews,
            'daily_customers'=>$request->daily_customers,
            'total_branches'=>$request->total_branches,
            'youtube'=>$request->youtube,
        ]);


        if($request->hasFile('logo_main')){
            $setting->update([
                'logo_main'=>$request->file('logo_main')->store('images'),
            ]);
        }

        if($request->hasFile('logo_footer')){
            $setting->update([
                'logo_footer'=>$request->file('logo_footer')->store('images'),
            ]);
        }

        if($request->hasFile('lets_meat_logo')){
            $setting->update([
                'lets_meat_logo'=>$request->file('lets_meat_logo')->store('images'),
            ]);
        }


        return redirect()->route('admin.settings.index')->withToastSuccess('Updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
