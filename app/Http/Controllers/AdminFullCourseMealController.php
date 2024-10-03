<?php

namespace App\Http\Controllers;

use App\Models\FullCourseMeal;
use Illuminate\Http\Request;

class AdminFullCourseMealController extends Controller
{
    public function index()
    {
        $fullCourseMeals = FullCourseMeal::latest()->get();

        return view('admin.full-course-meal.index', compact('fullCourseMeals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fullCourseMeal=null;

        return view('admin.full-course-meal.add_edit', compact('fullCourseMeal'));
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

        FullCourseMeal::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image')->store('full-course-meal'),
        ]);

        return redirect()->route('admin.full-course-meal.index')->withToastSuccess('Added successfully');
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
        $fullCourseMeal = FullCourseMeal::findOrFail($id);

        return view('admin.full-course-meal.add_edit', compact('fullCourseMeal'));
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
        $fullCourseMeal = FullCourseMeal::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,jpeg,gif,svg,webp|max:4048',
        ]);

        $fullCourseMeal->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $request->file('image') ? $request->file('image')->store('full-course-meal') : $fullCourseMeal->image_path,
        ]);

        return redirect()->route('admin.full-course-meal.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FullCourseMeal::findOrFail($id)->delete();

        return back()->withToastSuccess('Deleted successfully');
    }
}
