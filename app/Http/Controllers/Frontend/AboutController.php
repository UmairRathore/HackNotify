<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Cards;
use App\Models\Footer;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function index()
    {
            $about = About::all();
            $footer = Footer::all();
            $cards = Cards::all();

        return view('frontend.about',compact('about','footer','cards'));
    }
}
