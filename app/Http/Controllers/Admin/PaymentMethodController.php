<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentMethodController extends Controller
{


    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new PaymentMethod();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.donate.payment-method.';
        $this->data['moduleName'] = 'PaymentMethod';
    }

    //Payment-Method
    public function index()
    {

        $this->data['paymentmethod'] = $this->_model::all();
        return view($this->_viewPath.'paymentmethod-list',$this->data);

    }



//Payment-Method Add

    //Add-Payment-Method (page)
    public function create()
    {
        return view($this->_viewPath.'add-paymentmethod');
    }

    public function store(Request $request)
    {


            $request->validate([
                'currency' => 'required',
                'wallet_number' => 'required',
                'currency_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

        //         'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',




        $paymentmethod =$this->_model;
        $paymentmethod->currency = $request->input('currency');
        $paymentmethod->wallet_number = $request->input('wallet_number');
        if ($request->hasfile('currency_image')) {
            //upload new file
            $file = $request->file('currency_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $file->move($path, $filename);
            $paymentmethod->currency_image = $filename;
//            dd($paymentmethod);

        } else {

            $paymentmethod->currency_image = 'default-image.png';
        }

        $check =  $paymentmethod->save();
        if ($check) {
            $msg = 'Record Added successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not Added successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();    }


//Payment-Method Edit
    public function edit($id)
    {
        $this->data['paymentmethod'] = $this->_model::where('id', $id)->first();
        return view($this->_viewPath.'edit-paymentmethod',$this->data);
    }


//Payment-Method Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'currency' => 'required',
            'wallet_number' => 'required',
            'currency_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $paymentmethod = $this->_model::find($id);
        $paymentmethod->currency = $request->input('currency');
        $paymentmethod->wallet_number = $request->input('wallet_number');

        if ($request->hasfile('currency_image')) { //code for remove old file
            $destination = $paymentmethod->currency_image;
//            dd($destination);
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //upload new file
            $file = $request->file('currency_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $paymentmethod->currency_image = $filename;
            $file->move($path, $filename);

        }

        //for update in table
        $check = $paymentmethod->update();
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


    //Payment-Method Delete
    public function destroy($id)
    {
        $paymentmethod = $this->_model::find($id);
        $destination = $paymentmethod->currency_image;

        //code for remove old file
//        dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $check = $paymentmethod->delete();
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
