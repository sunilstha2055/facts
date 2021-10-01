<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create'); 
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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $service=new Service();
        $service->title=$request->title;
        $service->description=$request->description;

        if ($request->file('image')){
            $file=$request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/image/service',$image);           
            $service->image = $image;
        }

        $service->save();


        return redirect()->route('admin.services.index')->with('success', "Service save");
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
        $service=Service::find($id);
        return view('admin.service.edit', compact('service'));
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
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $service=Service::findOrFail($id);
        $service->title=$request->title;
        $service->description=$request->description;

        if ($request->file('image')){
            $file=$request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/image/service',$image);           
            $service->image = $image;
        }

        $service->save();


        return redirect()->route('admin.services.index')->with('success', "Service save");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service= Service::find($id);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Services is Deleted !');
    }
}