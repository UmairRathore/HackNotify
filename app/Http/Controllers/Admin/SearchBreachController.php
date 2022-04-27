<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\CompanyImport;
use App\Imports\SearchBreachImport;
use App\Models\Company;
use App\Models\SearchBreach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class SearchBreachController extends Controller
{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new SearchBreach();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.company.searchbreach.';
        $this->data['moduleName'] = 'SearchBreach';
    }


    public function index()
    {
        $this->data['searchbreach'] = $this->_model::all();
        return view($this->_viewPath . 'searchbreach-list', $this->data);
    }


    public function create()
    {
        $this->data['company'] = Company::all();
        return view($this->_viewPath . 'add-searchbreach', $this->data);
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'company_id' => 'required',
//            'phone' => 'required|numeric',
//            'email' => 'required|email',
//            'password' => 'required'

//        ]);
//        $company_id = new CompanyImport($company_id);
//        $company_id = $request->company_id;
        $check =  Excel::import(new SearchBreachImport(), $request->file('file'));

//        $searchbreach->save();


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


    public function edit($id)
    {
        $this->data['searchbreach'] = $this->_model::where('id', '=', $id)->first();
        $this->data['company'] = Company::all();
        return view($this->_viewPath . 'edit-searchbreach', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_id' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required'

        ]);

        $searchbreach = $this->_model::find($id);
        $searchbreach->company_id = $request->company_id;
        $searchbreach->phone = $request->phone;
        $searchbreach->email = $request->email;
        $searchbreach->password = $request->password;
        $check =  $searchbreach->update();

        if ($check) {
            $msg = 'Record Updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not Updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();    }

    public function destroy($id)
    {
        $searchbreach = $this->_model::find($id);
        $check = $searchbreach->delete();
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
