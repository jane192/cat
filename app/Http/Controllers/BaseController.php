<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex(){
        return view('index');
    }
    public function getStatic($id=null){
        return view('static', compact('id'));
    }
}
