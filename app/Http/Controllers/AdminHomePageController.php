<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePage=HomePage::first();

        return view('admin.home-page.index',compact('homePage'));
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
        //
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
            'hero_title'=>'required',
            'hero_bg_video'=>'nullable|mimes:mp4,avi,mov,flv,wmv',
            'concept_heading'=>'required',
            'concept_subheading'=>'required',
            'concept_description'=>'required',
            'ceo_message'=>'required',
            'ceo_location'=>'required',
            'connect_heading'=>'required',
            'connect_subheading'=>'required',
            'connect_message'=>'required',
            'celebrate_heading'=>'required',
            'celebrate_subheading'=>'required',
            'concept_image'=>'nullable|image',
            'connect_bg_image'=>'nullable|image',
            'celebrate_images'=>'required|array',
            'celebrate_images.*'=>'nullable|image',
        ]);

        $homePage=HomePage::findOrFail($id);

        $homePage->update([
            'hero_title'=>$request->hero_title,
            'concept_heading'=>$request->concept_heading,
            'concept_subheading'=>$request->concept_subheading,
            'concept_description'=>$request->concept_description,
            'ceo_message'=>$request->ceo_message,
            'ceo_location'=>$request->ceo_location,
            'connect_heading'=>$request->connect_heading,
            'connect_subheading'=>$request->connect_subheading,
            'connect_message'=>$request->connect_message,
            'celebrate_heading'=>$request->celebrate_heading,
            'celebrate_subheading'=>$request->celebrate_subheading,
        ]);

        if($request->hasFile('hero_bg_video')){
            $homePage->update([
                'hero_bg_video'=>$request->file('hero_bg_video')->store('home-page'),
            ]);
        }

        if($request->hasFile('concept_image')){
            $homePage->update([
                'concept_image'=>$request->file('concept_image')->store('home-page'),
            ]);
        }

        if($request->hasFile('connect_bg_image')){
            $homePage->update([
                'connect_bg_image'=>$request->file('connect_bg_image')->store('home-page'),
            ]);
        }



        if(count($request->celebrate_images)>0){
            $celebrate_images=[];
            foreach($request->celebrate_images as $image){
                $celebrate_images[]=$image->store('home-page');
            }

            $homePage->update([
                'celebrate_images'=>json_encode($celebrate_images),
            ]);
        }

        return redirect()->back()->withToastSuccess('Updated successfully');

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
