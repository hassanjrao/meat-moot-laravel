<?php

namespace App\Http\Controllers;

use App\Models\MenuHighlight;
use Illuminate\Http\Request;

class AdminMenuHighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuHighlights = MenuHighlight::latest()->get();

        return view('admin.menu-highlights.index', compact('menuHighlights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menuHighlight=null;

        return view('admin.menu-highlights.add_edit', compact('menuHighlight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,jpeg,gif,svg,webp|max:4048',
        ]);

        MenuHighlight::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image')->store('menu-highlights'),
        ]);

        return redirect()->route('admin.menu-highlights.index')->withToastSuccess('Added successfully');
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
        $menuHighlight = MenuHighlight::findOrFail($id);

        return view('admin.menu-highlights.add_edit', compact('menuHighlight'));
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
        $menuHighlight = MenuHighlight::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,jpeg,gif,svg,webp|max:4048',
        ]);

        $menuHighlight->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image') ? $request->file('image')->store('menu-highlights') : $menuHighlight->image_path,
        ]);

        return redirect()->route('admin.menu-highlights.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MenuHighlight::findOrFail($id)->delete();

        return back()->withToastSuccess('Deleted successfully');
    }
}
