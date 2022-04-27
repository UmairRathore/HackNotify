<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new User();
//        $this->middleware('auth');
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.user.';
        $this->data['moduleName'] = 'User';
    }


    //USER_LIST
    public function index()

    {
        $this->data['user'] = $this->_model::all();
        return view($this->_viewPath.'user-list', $this->data);

    }


//ADD_USER


    //add-user(page)
    public function create()
    {
        return view($this->_viewPath.'add-user');
    }


    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:6',

        ]);


        $user = $this->_model;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('info_created', 'New Member has been added Successfully!');
    }


    public function show($id)
    {
        $this->data['user'] = $this->_model::find($id);
        return view( $this->_viewPath.'users.show',  $this->data);
    }



//UPDATE_USERS


    //EDIT_USERS-(page)
    public function edit($id)
    {

//        $user = User::where('id', $id)->first();
        $this->data['user'] =  $this->_model::find($id);
        return view($this->_viewPath.'edit-user',  $this->data);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
//            'password'=>'sometimes|required|string|min:6',

        ]);


        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user =  $this->_model::find($id);
        $user->update($input);


        return redirect()->back()->withInput()->with('info_updated', 'Member Info has been updated successfuly!');
    }


//DELETE_USERS
    public function destroy($id)
    {
        $user =  $this->_model::find($id);
        $user->delete();
        return back()->with('info_deleted', 'User Info has been deleted successfully!');
    }

}
