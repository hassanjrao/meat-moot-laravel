<?php

namespace App\Http\Controllers;

use App\Models\InvestorPageStep;
use Illuminate\Http\Request;

class AdminInvestorPageStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps=InvestorPageStep::latest()->get();

        return view('admin.steps.index',compact('steps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $step=null;

        return view('admin.steps.add_edit',compact('step'));
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
            'title'=>'required',
            'description'=>'required',
        ]);

        InvestorPageStep::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return redirect()->route('admin.franchise-steps.index')->withToastSuccess('Added successfully');
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
        $step=InvestorPageStep::findorfail($id);

        return view('admin.steps.add_edit',compact('step'));
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
            'title'=>'required',
            'description'=>'required',
        ]);
        InvestorPageStep::findorfail($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return redirect()->route('admin.franchise-steps.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InvestorPageStep::findorfail($id)->delete();

        return back()->withToastSuccess('Deleted successfully');
    }
}
