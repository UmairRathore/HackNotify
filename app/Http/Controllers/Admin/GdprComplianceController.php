<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GdprCompliance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GdprComplianceController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new GdprCompliance();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.data-protection.gdprcompliance.';
        $this->data['moduleName'] = 'GdprCompliance';
    }

    //Payment-Method
    public function index()
    {

        $this->data['gdprcompliance'] = $this->_model::all();

        return view($this->_viewPath.'gdprcompliance-list', $this->data);

    }



//Payment-Method Add

    //Add-Payment-Method (page)
    public function create()
    {
        return view($this->_viewPath.'add-gdprcompliance');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'g_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //         'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',




        $gdprcompliance = $this->_model;
        $gdprcompliance->title = $request->input('title');
        $gdprcompliance->paragraph = $request->input('paragraph');
        if ($request->hasfile('g_image')) {
            //upload new file
            $file = $request->file('g_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $file->move($path, $filename);
            $gdprcompliance->g_image = $filename;
//            dd($gdprcompliance);

        } else {

            $gdprcompliance->g_image = 'default-image.png';
        }

        $gdprcompliance->save();
        return back()->with('info_created', 'New Payment Method has been added Successfully!');
    }


//Payment-Method Edit
    public function edit($id)
    {
        $this->data['gdprcompliance'] = $this->_model::where('id', $id)->first();
        return view($this->_viewPath.'edit-gdprcompliance', $this->data);
    }


//Payment-Method Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
//            'g_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $gdprcompliance = $this->_model::find($id);
        $gdprcompliance->title = $request->input('title');
        $gdprcompliance->paragraph = $request->input('paragraph');

        if ($request->hasfile('g_image')) { //code for remove old file
            $destination = $gdprcompliance->g_image;
//            dd($destination);
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //upload new file
            $file = $request->file('g_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $gdprcompliance->g_image = $filename;
            $file->move($path, $filename);

        }

        //for update in table
        $gdprcompliance->update();
        return back()->with('info_updated', ' Payment Method has been updated successfuly!');
    }


    //Payment-Method Delete
    public function destroy($id)
    {
        $gdprcompliance = $this->_model::find($id);
        $destination = $gdprcompliance->g_image;

        //code for remove old file
//        dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $gdprcompliance->delete();
        return back()->with('info_deleted', 'Payment Method Info has been deleted successfully!');
    }
}
