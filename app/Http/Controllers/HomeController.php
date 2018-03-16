<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Catalog;
use Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        
    { 
        $cats=Catalog::all();
     $products=Product::all();
        return view('home',compact('cats','products'));
    }    
    public function postIndex(ProductRequest $r){
        if (!empty($_FILES['picture']['name'])){
        
                            dd($_FILES);
            
 
        }
        $r['user_id']=Auth::user()->id;
       unset($r['_token']);
        $r['picture']='';
         $r['status']='';
        
        //dd($r->all());
        Product::create($r->all());
        return redirect('home');
        
    }
    public function getDelete($id=null){
        Product::find($id)->delete();
        //Product::where('id',$id)->delete(); или так
        return redirect('/home');
    }
    
}
