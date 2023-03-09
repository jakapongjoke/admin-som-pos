<?php
namespace App\Helpers;

class Util{
    public static function RunArrayTask($arr){
        $status = false;
  
        foreach($arr as $k=>$v){
            if(!$v===false){
                $status = true;
                continue;
            }else{
            
                $status = false;

                break;

            }
        }
        return $status;
    }
}


?>