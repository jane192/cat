<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Catalog;
use Auth;
use App;

class HomeController extends Controller
{

public $cats;
    public function __construct()
    {
        $this->middleware('auth');
        $this->cats = Catalog::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        
    { 
        $cats=$this->cats;
     $products=Product::orderBy('id','DESC')->orderBy('id','DESC')->paginate(5);
        return view('home',compact('cats','products'));
    }    
    public function postIndex(ProductRequest $r){
        if (!empty($_FILES['picture1']['name'])){
        
                            
            $pic =\App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
          
                
                   $r['picture']=$pic; 
 
        }else{
            $pic='';
            $r['picture']='';
        }

        $r['user_id']=Auth::user()->id;
       unset($r['_token']);
        
         $r['status']='';
        //dd($r->all());
        //dd($r->all());
        Product::create($r->all());
        return redirect('home');
        
    }
    public function getDelete($id=null){
       $obj =  Product::find($id);

        //Product::where('id',$id)->delete(); или так
        $pic =\App::make('\App\Libs\Imag')->picdel($obj->picture);
        $obj ->delete();
        return redirect('/home');
    }
    public function getEdit($id=null){
       $obj= Product::find($id);
         $cats=$this->cats;
        return view('home.edit', compact('obj','cats'));
        
    }
    public function postEdit(ProductRequest $r, $id=null){
         $r['user_id']=Auth::user()->id;
       unset($r['_token']);
        
        //$r['picture']='';
         $r['status']='';
        Product::updateOrCreate(['id'=>$id], $r->all());
        //$obj=Product::find($id);
        //$obj->name=$r['name'];
        //$obj->price=$r['price'];
        //$obj->body=$r['body'];
        //$obj->product_code=$r['product_code'];
        //$obj->save();
        
        return redirect('/home');
        
    }
   
    
    
}
