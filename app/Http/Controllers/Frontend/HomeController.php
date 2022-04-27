<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Admin\IndianBloodDonorsController;
use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Company;
use App\Models\Footer;
use App\Models\HomeHeading;
use App\Models\IndianBloodDonors;
use App\Models\RecentBranches;
use App\Models\SearchBreach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //

    public function index()
    {
        $heading = HomeHeading::all();
        $recentbranches = RecentBranches::all();
        $footer = Footer::all();
        $cards = Cards::all();
        return view('frontend.index', compact('recentbranches', 'heading', 'cards', 'footer'));
    }

    public function searchemail(Request $request)
    {
//        dd('ho');
//        $find = indianBloodDonors::all();

//        $find->email=$request->input('email');
        $email = SearchBreach::where('email', '=', $request->input('email'))->exists();

//        dd($email);

        $show = Company::all();
//        dd($email);


//
//        if($email)
//        {
//            return view('frontend.badnews','email');
//        }
//        else
//        {
//            return view('frontend.goodnews','email');
//        }

//        $img1 = '<img src="';
//        $img1 .= " {{('frontend/assets/static/media/badnews.ca3d9507.svg')}}";
//        $img1 .= '" alt="badnews">';
        if ($email == $request->email) {
//dd($email);
                $html = '<div>
                    <div class="badNewsContainer ">
                    <div class="row">
                        <div class="mr-1">

                        ';
                $html .= '<img src=" ' .
                    asset('frontend/assets/images/badnews.ca3d9507.svg') .
                    '" alt="badnews">';

                $html .= '</div>
                        <div class="badNewsText">Bad news</div>
                    </div>
                    <div class="badNewsDesc">Your email address has been found in <span style="font-weight: 600;">1 data breach</span>.</div>
                    <div class="badNewsList mt-4">
                        <div>
                            <div>
                                <div class="badNewsListTitle">;


                                    Blood Bank ';

                $html .= '<img alt="verified" src=" '
                    . asset('frontend/assets/images/verified.78915310.svg') .
                    ' "style="height: 20px; width: 20px;"> ';
//                                <img alt="verified" src="
//
//                                url(frontend/assets/static/media/verified.78915310.svg)"
//
//                                style="height: 20px; width: 20px;">


                $html .= '         </div>


                                <div class="badNewsInfo">
                                    <div class="row zebraStrip rowPadding">
                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Website</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">bloodbank.com</div>
                                    </div>
                                    <div class="row rowPadding">
                                        <div class="badNewsNormalText bold col-md-3 col-sm-12 boldMobile">Types of data exposed</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">Phone Numbers, Passwords, Email Addresses</div>
                                    </div>
                                    <div class="row zebraStrip rowPadding">
                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Details</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">In September 2015, the US-based credit bureau and consumer data broker Experian suffered a data breach that impacted 27 million customers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
//        $html .= "<h2> ITS IS FOUND </h2>";


//        return 1;
//        echo "y";

        } else {

            $html = '  <div class="noLeakContainer ">';
            $html .= '<img src=" ' .
                asset('frontend/assets/images/done.5255612b.svg') .
                '" alt="done" class="noLeakImage">';

            $html .= '   <p class="noLeakText">Looks like no leak has been found in the database</p>
                </div> ';

//        $html = "<h1> NOT FOUND  </h1>";
//        return 0;
//        echo "not x";
        }

        echo $html;

//        if ($email == null){
//            echo("Email not exists");
//        } else {
//            echo("Email  exists");
//        }
//        $heading = HomeHeading::all();
//        $recentbranches= RecentBranches::all();
//        $footer = Footer::all();
//        $cards = Cards::all();

//        return view('frontend.index',compact('email','recentbranches','heading','cards','footer'));
    }




        public function searchphone(Request $request)
    {
//        dd('ho');
//        $find = indianBloodDonors::all();

//        $find->email=$request->input('email');
        $phone = SearchBreach::where('phone', '=', $request->input('phone'))->exists();

//        $show = Company::all();
//        dd($$phone);


//
//        if($phone)
//        {
//            return view('frontend.badnews','phone');
//        }
//        else
//        {
//            return view('frontend.goodnews','phone');
//        }

//        $img1 = '<img src="';
//        $img1 .= " {{('frontend/assets/static/media/badnews.ca3d9507.svg')}}";
//        $img1 .= '" alt="badnews">';
        if ($phone) {
//dd($phone);
            $html = '<div>
                    <div class="badNewsContainer ">
                    <div class="row">
                        <div class="mr-1">

                        ';
            $html .= '<img src=" ' .
                asset('frontend/assets/images/badnews.ca3d9507.svg') .
                '" alt="badnews">';

            $html .= '</div>
                        <div class="badNewsText">Bad news</div>
                    </div>
                    <div class="badNewsDesc">Your email address has been found in <span style="font-weight: 600;">1 data breach</span>.</div>
                    <div class="badNewsList mt-4">
                        <div>
                            <div>
                                <div class="badNewsListTitle">


                                    Blood Bank ';

            $html .= '<img alt="verified" src=" '
                . asset('frontend/assets/images/verified.78915310.svg') .
                ' "style="height: 20px; width: 20px;"> ';
//                                <img alt="verified" src="
//
//                                url(frontend/assets/static/media/verified.78915310.svg)"
//
//                                style="height: 20px; width: 20px;">


            $html .= '         </div>


                                <div class="badNewsInfo">
                                    <div class="row zebraStrip rowPadding">
                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Website</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">bloodbank.com</div>
                                    </div>
                                    <div class="row rowPadding">
                                        <div class="badNewsNormalText bold col-md-3 col-sm-12 boldMobile">Types of data exposed</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">Phone Numbers, Passwords, Email Addresses</div>
                                    </div>
                                    <div class="row zebraStrip rowPadding">
                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Details</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">In September 2015, the US-based credit bureau and consumer data broker Experian suffered a data breach that impacted 27 million customers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
//        $html .= "<h2> ITS IS FOUND </h2>";


//        return 1;
//        echo "y";

        } else {

            $html = '  <div class="noLeakContainer ">';
            $html .= '<img src=" ' .
                asset('frontend/assets/images/done.5255612b.svg') .
                '" alt="done" class="noLeakImage">';

            $html .= '   <p class="noLeakText">Looks like no leak has been found in the database</p>
                </div> ';

//        $html = "<h1> NOT FOUND  </h1>";
//        return 0;
//        echo "not x";
        }

        echo $html;

//        if ($phone == null){
//            echo("Email not exists");
//        } else {
//            echo("Email  exists");
//        }
//        $heading = HomeHeading::all();
//        $recentbranches= RecentBranches::all();
//        $footer = Footer::all();
//        $cards = Cards::all();

//        return view('frontend.index',compact('phone','recentbranches','heading','cards','footer'));
    }




    public function searchpass(Request $request)
    {
//        dd('ho');
//        $find = indianBloodDonors::all();

//        $find->email=$request->input('email');
        $password = SearchBreach::where('password', '=', $request->input('password'))->exists();

//        $show = Company::all();
//        dd($password);


//
//        if($password)
//        {
//            return view('frontend.badnews','password');
//        }
//        else
//        {
//            return view('frontend.goodnews','password');
//        }

//        $img1 = '<img src="';
//        $img1 .= " {{('frontend/assets/static/media/badnews.ca3d9507.svg')}}";
//        $img1 .= '" alt="badnews">';
        if ($password == $request->password) {
//dd($phone);
            $html = '<div>
                    <div class="badNewsContainer ">
                    <div class="row">
                        <div class="mr-1">

                        ';
            $html .= '<img src=" ' .
                asset('frontend/assets/images/badnews.ca3d9507.svg') .
                '" alt="badnews">';

            $html .= '</div>
                        <div class="badNewsText">Bad news</div>
                    </div>
                    <div class="badNewsDesc">Your email address has been found in <span style="font-weight: 600;">1 data breach</span>.</div>
                    <div class="badNewsList mt-4">
                        <div>
                            <div>
                                <div class="badNewsListTitle">


                                    Blood Bank ';

            $html .= '<img alt="verified" src=" '
                . asset('frontend/assets/images/verified.78915310.svg') .
                ' "style="height: 20px; width: 20px;"> ';
//                                <img alt="verified" src="
//
//                                url(frontend/assets/static/media/verified.78915310.svg)"
//
//                                style="height: 20px; width: 20px;">


            $html .= '         </div>


                                <div class="badNewsInfo">
                                    <div class="row zebraStrip rowPadding">
                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Website</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">bloodbank.com</div>
                                    </div>
                                    <div class="row rowPadding">
                                        <div class="badNewsNormalText bold col-md-3 col-sm-12 boldMobile">Types of data exposed</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">Phone Numbers, Passwords, Email Addresses</div>
                                    </div>
                                    <div class="row zebraStrip rowPadding">
                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Details</div>
                                        <div class="badNewsNormalText col-md-9 col-sm-12">In September 2015, the US-based credit bureau and consumer data broker Experian suffered a data breach that impacted 27 million customers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
//        $html .= "<h2> ITS IS FOUND </h2>";


//        return 1;
//        echo "y";

        } else {

            $html = '  <div class="noLeakContainer ">';
            $html .= '<img src=" ' .
                asset('frontend/assets/images/done.5255612b.svg') .
                '" alt="done" class="noLeakImage">';

            $html .= '   <p class="noLeakText">Looks like no leak has been found in the database</p>
                </div> ';

//        $html = "<h1> NOT FOUND  </h1>";
//        return 0;
//        echo "not x";
        }

        echo $html;

//        if ($password == null){
//            echo("Email not exists");
//        } else {
//            echo("Email  exists");
//        }
//        $heading = HomeHeading::all();
//        $recentbranches= RecentBranches::all();
//        $footer = Footer::all();
//        $cards = Cards::all();

//        return view('frontend.index',compact('password','recentbranches','heading','cards','footer'));
    }






}
