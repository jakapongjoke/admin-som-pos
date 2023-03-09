<?php
namespace App\Repositories\Company\StoreCreator;

use App\Abstracts\Company\StoreCreator\StoreCreatorAbstract;
use App\Models\CompanyUsers;
use Util;
class StoreCreatorRepository extends StoreCreatorAbstract{
    public function CreateStore($TableCreatorTask):bool{
      
           if(Util::RunArrayTask($TableCreatorTask)){
            return true;

    }else{
        
        return false;
    }

    }
 
}
?>