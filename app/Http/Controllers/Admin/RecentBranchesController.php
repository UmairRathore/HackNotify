<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RecentBranches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class RecentBranchesController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new RecentBranches();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.home.recent-branches.';
        $this->data['moduleName'] = 'RecentBranches';
    }

    //Recent Branches
    public function index()
    {

        $this->data['recentbreaches'] = $this->_model::all();

        return view($this->_viewPath.'recentbranches-list', $this->data);

    }



//Recent Branches Add

    //Add-Recent Branches (page)
    public function create()
    {
        return view($this->_viewPath.'add-recentbranches');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'rb_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //         'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',




        $recentbreaches = $this->_model;
        $recentbreaches->title = $request->input('title');
        $recentbreaches->paragraph = $request->input('paragraph');
        if ($request->hasfile('rb_image')) {
            //upload new file
            $file = $request->file('rb_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $file->move($path, $filename);
            $recentbreaches->rb_image = $filename;
//            dd($recentbreaches);

        } else {

            $recentbreaches->rb_image = 'default-image.png';
        }

        $check = $recentbreaches->save();
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


//Recent Branches Edit
    public function edit($id)
    {
        $this->data['$recentbreaches'] = $this->_model::where('id', $id)->first();
        return view($this->_viewPath.'edit-recentbranches', $this->data);
    }


//Recent Branches Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'rb_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $recentbreaches = $this->_model::find($id);
        $recentbreaches->title = $request->input('title');
        $recentbreaches->paragraph = $request->input('paragraph');

        if ($request->hasfile('rb_image')) { //code for remove old file
            $destination = $recentbreaches->rb_image;
//            dd($destination);
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //upload new file
            $file = $request->file('rb_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $recentbreaches->rb_image = $filename;
            $file->move($path, $filename);

        }

        //for update in table
        $check =  $recentbreaches->update();
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


    //Recent Branches Delete
    public function destroy($id)
    {
        $recentbreaches = $this->_model::find($id);
        $destination = $recentbreaches->rb_image;

        //code for remove old file
//        dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $check = $recentbreaches->delete();
        if ($check) {
            $msg = 'Record deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        } else {
            $msg = 'Record not deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();    }
}
