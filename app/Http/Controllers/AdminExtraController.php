<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class AdminExtraController extends Controller
{
    public function index()
    {
        $extras = Extra::latest()->get();

        return view('admin.extras.index', compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extra=null;

        return view('admin.extras.add_edit', compact('extra'));
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
        ]);

        Extra::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.extras.index')->withToastSuccess('Added successfully');
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
        $extra = Extra::findOrFail($id);

        return view('admin.extras.add_edit', compact('extra'));
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
        $extra = Extra::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $extra->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.extras.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Extra::findOrFail($id)->delete();

        return back()->withToastSuccess('Deleted successfully');
    }
}
