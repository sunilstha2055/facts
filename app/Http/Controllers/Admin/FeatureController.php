<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        
        return view('admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feature.create'); 
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
            'icon_name'=>'required',
        ]);
        $feature=new Feature();
        $feature->title=$request->title;
        $feature->description=$request->description;
        $feature->icon_name=$request->icon_name;
        
        $feature->save();

        return redirect()->route('admin.features.index')->with('success', "feature save");
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
        $feature=Feature::find($id);
        return view('admin.feature.edit',compact('feature'));
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
            'icon_name'=>'required',
        ]);
        $feature= Feature::findOrFail($id);
        $feature->title=$request->title;
        $feature->description=$request->description;
        $feature->icon_name=$request->icon_name;
        
        $feature->save();

        return redirect()->route('admin.features.index')->with('success', "feature save");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature= Feature::find($id);
        $feature->delete();

        return redirect()->route('admin.features.index')->with('success', 'Feature is Deleted !');
    }
}