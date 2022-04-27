<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Admin\GdprComplianceController;
use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\DataProtectionHeading;
use App\Models\Footer;
use App\Models\GdprCompliance;
use Illuminate\Http\Request;

class DataProtectionController extends Controller
{
    //
    public function index()
    {
        $gdprcompliances = GdprCompliance::all();
        $count = GdprCompliance::count();
        $heading = DataProtectionHeading::all();
        $footer = Footer::all();
        $cards = Cards::all();
        return view('frontend.data-protection',compact('count','heading','gdprcompliances','footer','cards'));
    }
}
