<?php

namespace App\Http\Controllers;

use App\Models\OurMenu;
use Illuminate\Http\Request;

class AdminOurMenuController extends Controller
{
    public function index()
    {
        $menus = OurMenu::latest()->get();

        return view('admin.our-menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu=null;

        return view('admin.our-menu.add_edit', compact('menu'));
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

        OurMenu::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image')->store('our-menu'),
        ]);

        return redirect()->route('admin.our-menu.index')->withToastSuccess('Added successfully');
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
        $menu = OurMenu::findOrFail($id);

        return view('admin.our-menu.add_edit', compact('menu'));
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
        $menu = OurMenu::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,jpeg,gif,svg,webp|max:4048',
        ]);

        $menu->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image') ? $request->file('image')->store('our-menu') : $menu->image_path,
        ]);

        return redirect()->route('admin.our-menu.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OurMenu::findOrFail($id)->delete();

        return back()->withToastSuccess('Deleted successfully');
    }
}
