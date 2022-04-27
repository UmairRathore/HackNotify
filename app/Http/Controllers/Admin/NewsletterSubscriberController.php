<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;

class NewsletterSubscriberController extends Controller
{
    //

//    public function subscribe(Request $request)
//    {
//        $request->validate(
//            [
//                'subscriber_email' => 'required|email'
//            ]);
//
//        if (Newsletter::isSubscribed($request->subscriber_email)) {
//            return redirect()->back()->with('error', 'email already subscribed');
//        } else {
//            Newsletter::subscribe($request->subscriber_email);
//            return redirect()->back()->with('success', 'email already subscribed');
//
//        }
//    }
}


