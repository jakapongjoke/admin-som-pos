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
    public static function getRunningNumber($company_name,$tbname){
        
    }
    public static function getValueWithZeroCode(int $running_zero_num,int $intvalue){
      switch(strlen($running_zero_num)){
        case 1:
        return "0".$intvalue;
        break;
        case 2:
        return "00".$intvalue;
        break;
        case 3:
        return "000".$intvalue;
        break;
        case 4:
        return "0000".$intvalue;
        break;
        case 5:
        return "00000".$intvalue;
        break;
        default:
        return "0".$intvalue;
       
      }
    }
    public static function getRandNumArray($data){
        return rand(0,count($data)-1);
    }
}


?>