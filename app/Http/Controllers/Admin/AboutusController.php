<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutusController extends Controller
{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new About();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.aboutus.';
        $this->data['moduleName'] = 'Aboutus';
    }



    public function index() {

        $this->data['Aboutus'] = $this->_model::all();
        return view($this->_viewPath.'aboutus-list',$this->data);

    }


    public function create() {

        return view($this->_viewPath.'add-aboutus');
    }


    public function store(Request $request) {

        $request->validate([
           'questions'=>'required',
           'answers'=>'required'

        ]);

        $Aboutus = new About();
        $Aboutus->questions=$request->input('questions');
        $Aboutus->answers=$request->input('answers');
        $check = $Aboutus->save();
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

        $this->data['Aboutus'] = $this->_model::find($id);
        return view($this->_viewPath.'edit-aboutus',$this->data);
    }


    public function update(Request $request, $id) {

        $request->validate([
            'questions'=>'required',
            'answers'=>'required'
        ]);

        $Aboutus =$this->_model::find($id);
        $Aboutus->questions=$request->input('questions');
        $Aboutus->answers=$request->input('answers');
        $check = $Aboutus->update();


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

        $Aboutus = $this->_model::find($id);
        $check = $Aboutus->delete();
        if ($check) {
            $msg = 'Record deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        } else {
            $msg = 'Record not deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();

    }

}



//public function changeStatus(Request $request, $id)
//    {
//        $Aboutus = this->_model::find($id);
//        $Aboutus->status = $request->status;
//
//        $check = $Aboutus->save();
//        if ($check) {
//            $msg = "Status updated successfully";
////            Session::flash('msg', $msg);
////            Session::flash('message', 'alert-success');
//
//            return json_encode(array('statusCode' => 200, 'message' => $msg));
//
//        } else {
//            $msg = trans('lang_data.error');
////            Session::flash('msg', $msg);
////            Session::flash('message', 'alert-danger');
//            return json_encode(array('statusCode' => 302, 'message' => $msg));
//        }
//
//    }

