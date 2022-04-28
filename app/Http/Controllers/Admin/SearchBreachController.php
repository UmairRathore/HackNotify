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
//        $this->data['searchbreach'] = $this->_model::all();
        return view($this->_viewPath . 'searchbreach-list', $this->data);
    }

    public function searchBreachList(Request $request)
    {
        $totalFilteredRecord = $totalDataRecord = $draw_val = "";
        $columns_list = array(
            0 => 'id',
            1 => 'company_id',
            2 => 'phone',
            3 => 'email',
            4 => 'password',
            5 => 'id',

        );

        $totalDataRecord = SearchBreach::count();

        $totalFilteredRecord = $totalDataRecord;

        $limit_val = $request->input('length');
        $start_val = $request->input('start');
        $order_val = $columns_list[$request->input('order.0.column')];
        $dir_val = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $post_data = SearchBreach::offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val, $dir_val)
                ->get();
        } else {
            $search_text = $request->input('search.value');

            $post_data = SearchBreach::where('email', 'LIKE', "%{$search_text}%")
                ->orwhereHas('companyData', function ($query) use ($search_text) {
                    $query->where('name', 'like', '%' . $search_text . '%');
                })
                ->orWhere('phone', 'LIKE', "%{$search_text}%")
                ->offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val, $dir_val)
                ->get();
            $totalFilteredRecord = SearchBreach::where('email', 'LIKE', "%{$search_text}%")
                ->orwhereHas('companyData', function ($query) use ($search_text) {
                    $query->where('name', 'like', '%' . $search_text . '%');
                })->orWhere('phone', 'LIKE', "%{$search_text}%")
                ->count();
        }

        $data_val = array();
        if (!empty($post_data)) {
            foreach ($post_data as $post_val) {
                $datashow = '';
                $dataedit = '';

                $button = "<a href=" . route('delete-searchbreach', $post_val->id) . " data-toggle='tooltip' data-placement='top' title='Delete' class='ti ti-trash text-danger'> </a>";
                $button .= "<a href=" . route('edit-searchbreach', $post_val->id) . " data-toggle='tooltip' data-placement='top' title='Edit' class='ti ti-pencil text-primary'> </a>";

                $postnestedData['id'] = $post_val->id;
                $postnestedData['company'] = $post_val->companyData->name;
                $postnestedData['phone'] = $post_val->phone;
                $postnestedData['email'] = $post_val->email;
                $postnestedData['password'] = $post_val->password;
                $postnestedData['action'] = $button;
//                $postnestedData['action'] = "&emsp;<a href='{$datashow}'class='showdata' title='SHOW DATA' ><span class='showdata glyphicon glyphicon-list'></span></a>&emsp;<a href='{$dataedit}' class='editdata' title='EDIT DATA' ><span class='editdata glyphicon glyphicon-edit'></span></a>";
                $data_val[] = $postnestedData;

            }
        }
        $draw_val = $request->input('draw');
        $get_json_data = array(
            "draw" => intval($draw_val),
            "recordsTotal" => intval($totalDataRecord),
            "recordsFiltered" => intval($totalFilteredRecord),
            "data" => $data_val
        );

        echo json_encode($get_json_data);
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
        $check = Excel::import(new SearchBreachImport(), $request->file('file'));

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
        $check = $searchbreach->update();

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
