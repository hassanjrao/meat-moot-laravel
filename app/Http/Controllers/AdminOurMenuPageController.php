<?php

namespace App\Http\Controllers;

use App\Models\OurMenuPage;
use Illuminate\Http\Request;

class AdminOurMenuPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourMenuPage = OurMenuPage::first();

        return view('admin.our-menu-page.index', compact('ourMenuPage'));
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
        ]);

        $menuPage = OurMenuPage::findorfail($id);

        $menuPage->update([
            'hero_title' => $request->hero_title,
        ]);

        if ($request->hasFile('hero_bg_image')) {
            $menuPage->update([
                'hero_bg_image' => $request->hero_bg_image->store('images'),
            ]);
        }

        return redirect()->route('admin.our-menu-page.index')->withToastSuccess('Updated Successfully');

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
