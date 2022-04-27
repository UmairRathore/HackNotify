<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmailApiController extends Controller
{
    //https://hacknotify.com/api/searchEmailProvider


    public function email(){

        $emailbreach = Http::get('https://hacknotify.com/api/searchEmailProvider')->json();
        return view('badnews',compact('emailbreach'));
    }
}
