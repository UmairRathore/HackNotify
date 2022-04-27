<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\DonateHeading;
use App\Models\Footer;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    //
    public function index()
    {
        $donate = DonateHeading::all();
        $paymentmethod = PaymentMethod::all();
        $footer = Footer::all();
        $cards = Cards::all();

        return view('frontend.donate',compact('donate','paymentmethod','footer','cards'));
    }
}
