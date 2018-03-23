<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //public function __construct(){
        //$this->middleware('admin');
   // }
   public function getIndex(){
       echo"manager";
   }
}
