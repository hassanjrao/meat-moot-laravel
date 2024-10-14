<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AdminAboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutPage = AboutPage::first();

        return view('admin.about-page.index', compact('aboutPage'));
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
            'hero_title' => 'required',
            'hero_bg_image' => 'nullable|image',
            'description' => 'required',
            'history_heading' => 'required',
            'history_description' => 'required',
            'atmosphere_heading' => 'required',
            'atmosphere_description' => 'required',
            'image' => 'nullable',
            'about_images' => 'nullable|array',
            'about_images.*' => 'nullable|image',
            'atmosphere_bg_image' => 'nullable|image',
            'recommendated_by_images' => 'nullable|array',
            'recommendated_by_images.*' => 'nullable|image',
            'celebrate_images' => 'nullable|array',
            'celebrate_images.*' => 'nullable|image',
        ]);

        $aboutPage = AboutPage::findorfail($id);

        $aboutPage->update([
            'hero_title' => $request->hero_title,
            'description' => $request->description,
            'history_heading' => $request->history_heading,
            'history_description' => $request->history_description,
            'atmosphere_heading' => $request->atmosphere_heading,
            'atmosphere_description' => $request->atmosphere_description,
        ]);

        if ($request->hasFile('hero_bg_image')) {
            $aboutPage->update([
                'hero_bg_image' => $request->file('hero_bg_image')->store('about'),
            ]);
        }

        if ($request->hasFile('image')) {
            $aboutPage->update([
                'image' => $request->file('image')->store('about'),
            ]);
        }

        if ($request->hasFile('atmosphere_bg_image')) {
            $aboutPage->update([
                'atmosphere_bg_image' => $request->file('atmosphere_bg_image')->store('about'),
            ]);
        }

        if($request->about_images && count($request->about_images) > 0){
            $about_images = [];
            foreach ($request->about_images as $image) {
                $about_images[] = $image->store('about');
            }
            $aboutPage->update([
                'about_images' => json_encode($about_images),
            ]);
        }

        if($request->recommendated_by_images && count($request->recommendated_by_images) > 0){
            $recommendated_by_images = [];
            foreach ($request->recommendated_by_images as $image) {
                $recommendated_by_images[] = $image->store('about');
            }
            $aboutPage->update([
                'recommendated_by_images' => json_encode($recommendated_by_images),
            ]);
        }

        if($request->celebrate_images && count($request->celebrate_images) > 0){
            $celebrate_images = [];
            foreach ($request->celebrate_images as $image) {
                $celebrate_images[] = $image->store('about');
            }
            $aboutPage->update([
                'celebrate_images' => json_encode($celebrate_images),
            ]);
        }

        return redirect()->route('admin.about-page.index')->with('success', 'Updated successfully');
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
