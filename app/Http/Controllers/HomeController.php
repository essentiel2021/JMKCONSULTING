<?php

namespace App\Http\Controllers;

use App\Models\Propo;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $sliders = Slider::orderBy('created_at', 'desc')->take(3)->get();
        $propo = Propo::latest()->first();
        return view('home.index',compact('title','sliders','propo'));
    }
}
