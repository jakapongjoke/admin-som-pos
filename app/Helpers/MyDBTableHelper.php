<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use StringHelper;





class MyDBTableHelper{


    public  function DropMultipleTable($tb = array(),$foreignKey=array()){
    foreach($tb as $k=>$v){
       
        if(Schema::hasTable($tb)){
          
            Schema::table($tb, function (Blueprint $table) {
                if(count($foreignKey)>0){
                    foreach($foreignKey as $frKey){
                        $table->dropForeign($frKey);
                    }
                }
                Schema::dropIfExists($tb);

                 });
       }
    }

    }

    
    public  function DropMultipleTableWithCompanyName($tb = array(),$foreignKey=array()){


        $this->CurrentTableName = "";
        $this->foreignKey = $foreignKey;

        foreach($tb as $v){
            $this->CurrentTableName = $v;
            if(Schema::hasTable( $this->CurrentTableName)){
                
                Schema::table($this->CurrentTableName, function (Blueprint $table) {
                    Schema::dropIfExists($this->CurrentTableName);

                });
         

           }

        }
    
        }
}

?>