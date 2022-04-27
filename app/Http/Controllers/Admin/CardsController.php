<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CardsController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new Cards();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.cards.';
        $this->data['moduleName'] = 'Cards';
    }

    //Cards
    public function index()
    {

        $this->data['cards'] = $this->_model::all();
        return view($this->_viewPath.'cards-list', $this->data);

    }



//Cards Add

    //Add-Cards (page)
    public function create()
    {
        return view($this->_viewPath.'add-cards');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'card_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //         'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        $cards = $this->_model;
        $cards->title = $request->input('title');
        $cards->paragraph = $request->input('paragraph');
        if ($request->hasfile('card_image')) {
            //upload new file
            $file = $request->file('card_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $file->move($path, $filename);
            $cards->card_image = $filename;
//            dd($cards);

        } else {

            $cards->card_image = 'default-image.png';
        }

        $check =  $cards->save();
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


//Cards Edit
    public function edit($id)
    {
        $this->data['cards'] = $this->_model::where('id', $id)->first();
        return view($this->_viewPath.'edit-cards',$this->data);
    }


//Cards Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'card_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $cards = $this->_model::find($id);
        $cards->title = $request->input('title');
        $cards->paragraph = $request->input('paragraph');

        if ($request->hasfile('card_image')) { //code for remove old file
            $destination = $cards->card_image;
//            dd($destination);
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //upload new file
            $file = $request->file('card_image');
            $path = 'images/';
//                $extension=$file->getClientOriginalExtension();
            $filename = $path . time() . '-' . $file->getClientOriginalName();
            $cards->card_image = $filename;
            $file->move($path, $filename);

        }

        //for update in table
        $check =  $cards->update();

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


    //Cards Delete
    public function destroy($id)
    {
        $cards = $this->_model::find($id);
        $destination = $cards->card_image;

        //code for remove old file
//        dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $check = $cards->delete();
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
