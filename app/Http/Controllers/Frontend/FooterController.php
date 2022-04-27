<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function index()
    {
        $footer = Footer::all();
        return view('layouts.frontend.footer',compact('footer'));
    }
}

