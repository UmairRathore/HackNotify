<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Admin\IndianBloodDonorsController;
use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Company;
use App\Models\Footer;
use App\Models\HomeHeading;
use App\Models\IndianBloodDonors;
use App\Models\OtpVerification;
use App\Models\RecentBranches;
use App\Models\SearchBreach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Session;
use Twilio\Rest\Client;
use function PHPUnit\Framework\isEmpty;

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
        $email = SearchBreach::where('email', '=', $request->email)->get();

        if ($email->count() && $request->email) {
            $record = SearchBreach::with('companyData')->where('email', '=', $request->email)->first();
            return response()->json(['status' => true, 'message' => 'found', 'record' => $record, 'count' => $email->count()]);
        } else {
            return response()->json(['status' => false, 'message' => 'Not found']);
        }


    }


    public function send_otp(Request $request)
    {
        $receiverNumber = "+" . $request->phone;


        try {
            $request->validate
            ([
                'phone' => 'required|numeric|digits_between:7,15',
            ]);
            $pin = mt_rand(1000, 9999);
            $check = OtpVerification::updateOrCreate([
                'phone' => $request->phone,
            ], [
                'phone' => $request->phone,
                'otp_pin' => $pin,
            ]);
//            if ($check) {
//            Session::flash('message', 'This is a message!');
//            Session::flash('alert-class', 'alert-success');
//                /////success message
//            }

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
            $message = "Your one time pin is $pin. Please verify your identity";
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);
            return response()->json(['status' => true, 'message' => "OTP Sent Successfully."]);

        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function verify_otp(Request $request)
    {
        try {
            $verified = OtpVerification::where(['phone' => $request->phone, 'otp_pin' => $request->otp_pin])->first();

            if ($verified) {
                $phone = SearchBreach::where('phone', '=', $request->phone)->get();

                $record = SearchBreach::with('companyData')->where('phone', '=', $request->phone)->first();
                if ($record) {
                    return response()->json(['status' => true, 'message' => 'found', 'record' => $record, 'count' => $phone->count()]);
                } else
                    return response()->json(['status' => true, 'message' => 'Not found', 'record' => $record, 'count' => $phone->count()]);

            } else {
                return response()->json(['status' => false, 'message' => 'Otp Not verified',]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }

    }

    public function searchphone(Request $request)
    {

        $phone = SearchBreach::where('phone', '=', $request->input('phone'))->get();

        if ($phone->count()) {
            return response()->json(['status' => 'found', 'count' => $phone->count()]);
        } else {
            return response()->json(['status' => 0, 'count' => 0]);
        }
    }


    public function searchpass(Request $request)
    {


            $password = SearchBreach::where('password', '=', $request->password)->get();

            if ($password->count() && $request->password) {
                $record = SearchBreach::with('companyData')->where('password', '=', $request->password)->first();
                return response()->json(['status' => true, 'message' => 'found', 'record' => $record, 'count' => $password->count()]);
            } else {
                return response()->json(['status' => false, 'message' => 'Not found']);
            }



    }
}
