<?php

namespace App\Http\Controllers\Customer\Inventory\ProductMaster;
use App\Services\Customer\Inventory\Master\MasterCodeService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductMasterController extends Controller
{
    private MasterCodeService $MasterCodeService;
    public function __construct(MasterCodeService $MasterCodeService)
    {
        $this->MasterCodeService = $MasterCodeService;
    }
  
    public function ValidateData(CompanyMasterStorageRequest $request)
    {   
        
       if($request->validated()){
        return response()->json([
            "status"=>"complete"
        ], 200);

       }else{
        return response()->json($validator->errors(), 422);

       }
    }
    public function index(Request $request){
     $r = $request->segments();

        switch ($r[1]) {
            case "product-master-stone":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_storage');
                $data = ['masterdata'=>$masterdata];
                return view('customer.backoffice.inventory.ProductMaster.ProductMasterStone',['data'=>$data]);
            break;
            case "product-master-customer":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_customer');
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterCustomer',['data'=>$data]);
                         break;
          
            case "product-master-jewelry":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_vendor');
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.ProductMaster.ProductMasterJewelry',['data'=>$data]);
             break;
          
            default:
              return true;
          }
   
        
        
    }
    
}
