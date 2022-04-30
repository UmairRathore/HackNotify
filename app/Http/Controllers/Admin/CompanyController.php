<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Imports\CompanyImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Input\Input;

class CompanyController extends Controller

{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new Company();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.company.company.';
        $this->data['moduleName'] = 'Company';
    }


    public function index()
    {
        $this->data['company'] = $this->_model::all();
        return view($this->_viewPath . 'company-list', $this->data);
    }


    public function create()
    {
//        $this->data['company'] = Company::all();
        return view($this->_viewPath . 'add-company');
    }

//    public function import(Request $request)
//    {
//        Excel::import(new CompanyImport(),$request->file('file'));
//
//        return back();
//    }

    public function store(Request $request)
    {
//
        $check =  Excel::import(new CompanyImport(),$request->file('file'));

        if ($check) {
            $msg = 'CSV imported successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'CSV not imported successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $this->data['company'] = $this->_model::where('id', '=', $id)->first();
        return view($this->_viewPath . 'edit-company', $this->data);
    }

    public function update(Request $request, $id)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'industry' => 'required',
            'date_of_data_breach' => 'required',
            'number_of_leaked_accounts' => 'required',
            'website' => 'required',
            'detail' => 'required'

        ]);

        $company =  $this->_model::find($id);
        $input = $request->all();
        $check = $company->update($input);
        if ($check) {
            $msg = 'Record updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Record not updated successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();

    }

    public function destroy($id)
    {
        $company = $this->_model::find($id);
        $check = $company->delete();
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




//    public function store(Request $request)
//    {
//        $input = $request->input();
//        Lists::create($input);
//
//        if (Input::hasFile('name'))
//        {
//
//            $file = Input::file('name');
//            $name = time() . '-' . $file->getClientOriginalName();
//
//            $path = storage_path('documents');
//
//            $file->move($path, $name);
//
//            // All works up to here
//            // All I need now is to create an array
//            // from the CSV and insert into the customers database
//        }
//    }

//    function csvToArray($filename = '', $delimiter = ',')
//    {
//        if (!file_exists($filename) || !is_readable($filename)){
//            return false;
//
//        }
//
//        $header = null;
//        $data = array();
//        if (($handle = fopen($filename, 'r')) !== false)
//        {
//            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
//            {
//                if (!$header)
//                    $header = $row;
//                else
//                    $data[] = array_combine($header, $row);
//            }
//            fclose($handle);
//        }
//
//        return $data;
//    }
//
//    public function store()
//    {
//        $file = public_path('file');
//
//        $customerArr = $this->csvToArray($file);
//        $data = [];
//        for ($i = 0; $i < count($customerArr); $i ++)
//        {
//            $data[] = [
//                    'name' => 'value',
//                    'industry' => 'value2',
//                    'date_of_data_breach' => 'value3',
//                    'number_of_leaked_accounts' => 'value4',
//                    'website' => 'value5',
//                    'detail' => 'value6',
//        ];
//        //Company::firstOrCreate($customerArr[$i]);
//          }
////        Company::insert($data);
//        DB::table('Company')->insert($data);
//        return 'Jobi done or what ever';
//    }

//
//
//    public function readfile(Request $request)
//    {
//        if (!empty($request->files) && $request->hasFile('csv_file')) {
//            $file = $request->file('csv_file');
//            $type = $file->getClientOriginalExtension();
//            $real_path = $file->getRealPath();
//            if ($type <> 'csv') {
//                Alert::error('Wrong file extension', 'Only CSV is allowed')->persistent('close');
//                return redirect()->back();
//            }
//            $data = $this->readCSV($real_path, array('delimiter' => ','));
//        }
//
//    }
//
//    function csvToArray($filename = '', $delimiter = ',')
//    {
//        if (!file_exists($filename) || !is_readable($filename))
//            return false;
//
//        $header = null;
//        $data = array();
//        if (($handle = fopen($filename, 'r')) !== false)
//        {
//            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
//            {
//                if (!$header)
//                    $header = $row;
//                else
//                    $data[] = array_combine($header, $row);
//            }
//            fclose($handle);
//        }
//
//        return $data;
//    }
//

//    function csvToArray($filename = '', $delimiter = ',')
//    {
//        if (!file_exists($filename) || !is_readable($filename)){
//            return false;
//
//        }
//
//        $header = null;
//        $data = array();
//        if (($handle = fopen($filename, 'r')) !== false)
//        {
//            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
//            {
//                if (!$header)
//                    $header = $row;
//                else
//                    $data[] = array_combine($header, $row);
//            }
//            fclose($handle);
//        }
//
//        return $data;
//    }

//    public function store (Request $request)
//    {
//        if ($request->hasFile('file')){
//
//            $file = $request->file('file');
//            $name = time() . '-' . $file->getClientOriginalName();
//            // Moves file to folder on server
//            $file->move(public_path() . '/uploads/CSV', $name);
//
//
//            return back(); // return for testing
//
//        $customerArr = $this->csvToArray($file);
//        $data = [];
//        for ($i = 0; $i < count($customerArr); $i ++)
//        {
//            $data[] = [
//                    'name' => 'value',
//                    'industry' => 'value2',
//                    'date_of_data_breach' => 'value3',
//                    'number_of_leaked_accounts' => 'value4',
//                    'website' => 'value5',
//                    'detail' => 'value6',
//        ];
//        //Company::firstOrCreate($customerArr[$i]);
//          }
////        Company::insert($data);
//        DB::table('Company')->insert($data);
//        return 'Jobi done or what ever';
//        }
//    }


    }


