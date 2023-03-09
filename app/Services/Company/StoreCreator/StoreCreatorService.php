<?php
namespace App\Services\Company\StoreCreator;
use Illuminate\Support\Facades\Response as FacadeResponse;

use App\Repositories\Company\StoreCreator\StoreCreatorRepository;
use App\Services\Company\Inventory\Master\MasterCodeService;
use MyDBTableHelper;
use Illuminate\Support\Str;
use StringHelper;
use App\Models\Company as Company;
class StoreCreatorService{
    private StoreCreatorRepository $StoreCreator;
    private MasterCodeService $MasterCodeService;
    private Company $Company;
    private $MasterTableGroup;
    
    public function __construct(StoreCreatorRepository $StoreCreator,Company $Company){

               $this->StoreCreator = $StoreCreator ;
               $this->Company = $Company ;
            
        }

    public function CreateStore($company_data){
      if($this->CreateAllStoreTable($company_data)){
        $content = [
          'message' => 'complete',
      ];
      
      $response = FacadeResponse::make(json_encode($content), 200);
    
      return  $response;
 
      }else{
        exit;
        if(strlen($company_data['company_store_name'])>0&&!Str::contains($company_data['company_store_name'], ['*', ' '])){    
            $mastertable[0] = $company_data['company_store_name']."_master";
            $mastertable[1] = $company_data['company_store_name']."_product_master";
            $mastertable[2] = $company_data['company_store_name']."_product_group_info";
           
          $MyDBTableHelper = new MyDBTableHelper();

          $MyDBTableHelper->DropMultipleTableWithCompanyName($mastertable,['product_master_id']);

        }

      }
    }

    public function CreateAllMasterTable($company_data){

        $TableCreatorTask = [
            "CreateMasterCodeTable"=> $this->StoreCreator->CreateMasterCodeTable($company_data),
            "CreateProductMasterTable"=>$this->StoreCreator->CreateProductMasterTable($company_data),
            "CreateProductGroupInfoTable"=>$this->StoreCreator->CreateProductGroupInfoTable($company_data),
            "Add Company"=>$this->Company->create($company_data)
        ];
        //  return $this->StoreCreator->CreateMasterCodeTable($company_data);
         return $this->StoreCreator->CreateStore(  $TableCreatorTask );

    }


    public function CreateAllStoreTable($company_data){
        if($this->CreateAllMasterTable($company_data)){
            return true;
        }else{
          return false;
        }

    }

}

?>