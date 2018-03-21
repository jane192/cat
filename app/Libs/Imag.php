<?php
   namespace App\Libs; 
   use Image;
    

class Imag {
    public function __construct(){
    }
        public function url($puth,$dirrectory=null,$name=null){
            if($puth!=null){
                if ($dirrectory!=null){
                    $dir=$dirrectory;
                    if(!file_exists($dir)){
                        mkdir($dir,0777,true);
                    }
                }else{
                    $dir ='load';
                }
                if($name!=null){
                    $name_pic=$name;
                }else{
                    $name_pic=date('y_m_d_h_i_s').'.jpg';
                }
                $img =Image::make($puth);
                $img->save($dir.'/'.$name_pic);
                $img->resize(200,null,function($con){
                    $con->aspectRatio();
                    
                });
                $img->save($dir.'/s_'.$name_pic);
                return $name_pic;

            }else {
                return false;
            }
    }
    public function picdel($puth){
        if ($puth){
            $dir='load';          
            unlink($dir.'/'.$puth); 
            unlink($dir.'/s_'.$puth); 
        }
        
    }
    
}
