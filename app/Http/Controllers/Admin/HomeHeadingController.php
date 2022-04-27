<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeHeading;
use Illuminate\Http\Request;

class HomeHeadingController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new HomeHeading();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.home.heading.';
        $this->data['moduleName'] = 'HomeHeading';
    }
        public function index() {

            $this->data['homeheading'] = $this->_model::all();
            return view($this->_viewPath.'homeheading-list',$this->data);

        }

//      public function changeStatus(Request $request, $id)
//        {
//            $homeheading = HomeHeading::find($id);
//            $homeheading->status = $request->status;
//
//            $check = $homeheading->save();
//            if ($check) {
//                $msg = "Status updated successfully";
//    //            Session::flash('msg', $msg);
//    //            Session::flash('message', 'alert-success');
//
//                return json_encode(array('statusCode' => 200, 'message' => $msg));
//
//            } else {
//                $msg = trans('lang_data.error');
//    //            Session::flash('msg', $msg);
//    //            Session::flash('message', 'alert-danger');
//                return json_encode(array('statusCode' => 302, 'message' => $msg));
//            }
//
//        }

        public function create() {

            return view($this->_viewPath.'add-homeheading');
        }


        public function store(Request $request) {

            $request->validate([
               'paragraph'=>'required',
            ]);

            $homeheading = $this->_model;
            $homeheading->paragraph=$request->input('paragraph');
            $homeheading->save();

            return back();


        }

        public function edit($id) {

            $this->data['homeheading'] = $this->_model::find($id);
            return view($this->_viewPath.'edit-homeheading',$this->data);


        }


        public function update(Request $request, $id) {

            $request->validate([
                'paragraph'=>'required',
                ]);

            $homeheading =$this->_model::find($id);
            $homeheading->paragraph=$request->input('paragraph');
            $homeheading->update();

            return back();

        }

        public function destroy($id) {

            $homeheading = $this->_model::find($id);
            $homeheading->delete();
            return back();

        }
}
