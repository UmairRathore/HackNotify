<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FooterController extends Controller
{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new Footer();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.footer.';
        $this->data['moduleName'] = 'Footer';
    }

    public function index() {

        $this->data['footer'] = $this->_model::all();
        return view($this->_viewPath.'footer-list',$this->data);

    }

//      public function changeStatus(Request $request, $id)
//        {
//            $footer = Footer::find($id);
//            $footer->status = $request->status;
//
//            $check = $footer->save();
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

        return view($this->_viewPath.'add-footer');
    }


    public function store(Request $request) {

        $request->validate([
            'paragraph'=>'required',
        ]);

        $footer = $this->_model;
        $footer->paragraph=$request->input('paragraph');
        $check = $footer->save();

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

        $this->data['footer'] = $this->_model::find($id);
        return view($this->_viewPath.'edit-footer',$this->data);


    }


    public function update(Request $request, $id) {

        $request->validate([
            'paragraph'=>'required',
        ]);

        $footer =$this->_model::find($id);
        $footer->paragraph=$request->input('paragraph');
        $check = $footer->update();

        if ($check) {
            $msg = 'Record Updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();
    }

    public function destroy($id) {

        $footer = $this->_model::find($id);
        $check = $footer->delete();
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
