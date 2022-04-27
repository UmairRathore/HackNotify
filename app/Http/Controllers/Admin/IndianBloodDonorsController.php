<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IndianBloodDonors;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class IndianBloodDonorsController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new IndianBloodDonors();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.indian-blood-donors.';
        $this->data['moduleName'] = 'Aboutus';
    }





    public function index()
    {
        $this->data['data'] = $this->_model::all();
        return view($this->_viewPath.'indian-blood-donors-list',$this->data);
    }



//    public function  search(Request $request)
//    {
//
//        $data = IndianBloodDonors::where('email', '=', $request->input('email'))->exists();
//
////        if(IndianBloodDonors::where('email', '=', $request->input('email'))->exists()) {
////            // auser found
////                return view('frontend.frontend.badnews');
////            }
////        else
////        {
////            return view('frontend.frontend.goodnews');
////        }
//
//        return view('frontend.index',compact('data'));
//    }
}
