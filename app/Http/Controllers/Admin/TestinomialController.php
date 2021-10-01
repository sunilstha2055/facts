<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testinomial;

class TestinomialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testinomials = Testinomial::all();
        
        return view('admin.testinomial.index', compact('testinomials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testinomial.create');
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
            'name'=>'required',
            'postion'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $testinomial=new Testinomial();
        $testinomial->name=$request->name;
        $testinomial->postion=$request->postion;
        $testinomial->description=$request->description;

        if ($request->file('image')){
            $file=$request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/image/testinomial',$image);           
            $testinomial->image = $image;
        }

        $testinomial->save();


        return redirect()->route('admin.testinomials.index')->with('success', "testinomial save");
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
        $testinomial=Testinomial::find($id);
        return view('admin.testinomial.edit',compact('testinomial'));
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
            'name'=>'required',
            'postion'=>'required',
            'description'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $testinomial=Testinomial::findOrFail($id);
        $testinomial->name=$request->name;
        $testinomial->postion=$request->postion;
        $testinomial->description=$request->description;

        if ($request->file('image')){
            $file=$request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/image/testinomial',$image);           
            $testinomial->image = $image;
        }

        $testinomial->save();


        return redirect()->route('admin.testinomials.index')->with('success', "testinomial save");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testinomial= Testinomial::find($id);
        $testinomial->delete();

        return redirect()->route('admin.testinomials.index')->with('success', 'testinomials is Deleted !');
    }
}