<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\service;
use App\Models\feature;
use App\Models\testinomial;
use App\Models\project;
use App\Models\latestwork;
use App\Models\team;
use App\Models\pricing;
use App\Models\blog;

class HomeController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        $services = Service::orderBy('id','asc')->get();
        $features = Feature::orderBy('id','asc')->get();
        $testinomials = Testinomial::orderBy('id','asc')->get();
        $latestworks = Testinomial::orderBy('id','asc')->get();
        $projects = Project::orderBy('id','asc')->get();
        $teams = Team::orderBy('id','asc')->get();
        $pricings = Pricing::orderBy('id','asc')->get();
        $blogs = Blog::orderBy('id','asc')->get();
        return view('front.index', compact('sliders','services','features','testinomials','latestworks','projects','teams','pricings','blogs'));
    }
    public function slider()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        return view('front.slider', compact('sliders')); 
    }
    public function service()
    {
        $services= Service::orderBy('id','asc')->get();
        return view('front.service',compact('services'));
    }
    public function feature()
    {
        $features=Feature::orderBy('id','asc')->get();
        return view('front.feature',compact('features'));
    }
    public function testinomial()
    {
        $testinomials=Testinomial::orderBy('id','asc')->get();
        return view('front.testinomial',compact('testinomials'));
    }
    public function latestwork()
    {
        $latestworks=Latestwork::orderBy('id','asc')->get();
        return view('front.latestwork',compact('latestworks'));
    }
    public function project()
    {
        $projects=Project::orderBy('id','asc')->get();
        return view('front.project',compact('projects'));
    }
    public function team()
    {
        $teams=Team::orderBy('id','asc')->get();
        return view('front.team',compact('teams'));
    }
    public function pricing()
    {
        $pricings=Pricing::orderBy('id','asc')->get();
        return view('front.pricing',compact('pricings'));
    }
    public function blog()
    {
        $blogs=Blog::orderBy('id','asc')->get();
        return view('front.blog',compact('blogs'));
    }
}