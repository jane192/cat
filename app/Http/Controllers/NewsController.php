<?php
namespace App\Http\Controllers;
use App\News;
class NewsController extends Controller
{
public function getAll(){
    $all=News::orderBy('id','DESC')->paginate(3);
    return view ('news',compact('all'));
}
  public function getOne($id=null){
      $r=News::find($id);
      
      return view('news.onenew',compact('r'));
}
}
