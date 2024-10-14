<?php

namespace App\Http\Controllers;

use App\Models\InvestorPage;
use Illuminate\Http\Request;

class AdminInvestorPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investorPage = InvestorPage::first();

        return view('admin.investor-page.index', compact('investorPage'));
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
            'hero_description' => 'required',
        ]);

        $menuPage = InvestorPage::findorfail($id);

        $menuPage->update([
            'hero_title' => $request->hero_title,
            'hero_description' => $request->hero_description,
        ]);

        if ($request->hasFile('hero_bg_image')) {
            $menuPage->update([
                'hero_bg_image' => $request->hero_bg_image->store('images'),
            ]);
        }

        return redirect()->route('admin.investor-page.index')->withToastSuccess('Updated Successfully');

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
