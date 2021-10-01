<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create'); 
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
            'title1'=>'required',
            'title2'=>'required',
            'description'=>'required',
            'btn1'=>'required',
            'btn1_link'=>'required',
            'btn2'=>'nullable',
            'btn2_link'=>'nullable',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $slider=new Slider();
        $slider->title1=$request->title1;
        $slider->title2=$request->title2;
        $slider->description=$request->description;
        $slider->btn1=$request->btn1;
        $slider->btn1_link=$request->btn1_link;
        $slider->btn2=$request->btn2;
        $slider->btn2_link=$request->btn2_link;

        if ($request->file('image')){
            $file=$request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/image/slider',$image);           
            $slider->image = $image;
        }

        $slider->save();


        return redirect()->route('admin.sliders.index')->with('success', "Slider save");
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
        $slider=Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
            'title1'=>'required',
            'title2'=>'required',
            'description'=>'required',
            'btn1'=>'required',
            'btn1_link'=>'required',
            'btn2'=>'',
            'btn2_link'=>'',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $slider= Slider::findOrFail($id);
        $slider->title1=$request->title1;
        $slider->title2=$request->title2;
        $slider->description=$request->description;
        $slider->btn1=$request->btn1;
        $slider->btn1_link=$request->btn1_link;
        $slider->btn2=$request->btn2;
        $slider->btn2_link=$request->btn2_link;

        if ($request->file('image')){
            $file=$request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/image/slider',$image);           
            $slider->image = $image;
        }

        $slider->save();


        return redirect()->route('admin.sliders.index')->with('success', "Slider save");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider= Slider::find($id);
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider is Deleted !');
    }
}