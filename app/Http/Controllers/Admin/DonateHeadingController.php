<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonateHeading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DonateHeadingController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new DonateHeading();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.donate.heading.';
        $this->data['moduleName'] = 'Donate';
    }

    public function index() {

        $this->data['donate'] = $this->_model::all();
        return view($this->_viewPath.'donate-list',$this->data);

    }

//      public function changeStatus(Request $request, $id)
//        {
//            $donate = $this->_model::find($id);
//            $donate->status = $request->status;
//
//            $check = $donate->save();
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

        return view($this->_viewPath.'add-donate');
    }


    public function store(Request $request) {

        $request->validate([
            'paragraph'=>'required',
        ]);

        $donate =$this->_model;
        $donate->title=$request->input('title');
        $donate->paragraph=$request->input('paragraph');
        $check = $donate->save();

        if ($check) {
            $msg = 'Record Added successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not Added successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();

    }

    public function edit($id) {

        $this->data['donate'] = $this->_model::find($id);
        return view($this->_viewPath.'edit-donate',$this->data);


    }


    public function update(Request $request, $id) {

        $request->validate([
            'paragraph'=>'required',
        ]);

        $donate =$this->_model::find($id);
        $donate->title=$request->input('title');
        $donate->paragraph=$request->input('paragraph');
        $check = $donate->update();

        if ($check) {
            $msg = 'Record Updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not Updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();

    }

    public function destroy($id) {

        $donate = $this->_model::find($id);
        $check = $donate->delete();

        if ($check) {
            $msg = 'Record deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();

    }
}
