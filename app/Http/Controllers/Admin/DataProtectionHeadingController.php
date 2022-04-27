<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataProtectionHeading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataProtectionHeadingController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new DataProtectionHeading();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.data-protection.heading.';
        $this->data['moduleName'] = 'DataProtectionHeading';
    }

    public function index() {

        $this->data['dataprotection'] = $this->_model::all();
        return view($this->_viewPath.'dataprotection-list',$this->data);

    }

//      public function changeStatus(Request $request, $id)
//        {
//            $dataprotection = dataprotectionHeading::find($id);
//            $dataprotection->status = $request->status;
//
//            $check = $dataprotection->save();
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

        return view($this->_viewPath.'add-dataprotection');
    }


    public function store(Request $request) {

        $request->validate([
            'paragraph'=>'required',
        ]);

        $dataprotection = new DataProtectionHeading();
        $dataprotection->title=$request->input('title');
        $dataprotection->paragraph=$request->input('paragraph');
        $check = $dataprotection->save();

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

        $this->data['dataprotection'] = $this->_model::find($id);
        return view($this->_viewPath.'edit-dataprotection',$this->data);


    }


    public function update(Request $request, $id) {

        $request->validate([
            'paragraph'=>'required',
        ]);

        $dataprotection = $this->_model::find($id);
        $dataprotection->title=$request->input('title');
        $dataprotection->paragraph=$request->input('paragraph');
        $check =  $dataprotection->update();

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

        $dataprotection = $this->_model::find($id);
        $check = $dataprotection->delete();
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
