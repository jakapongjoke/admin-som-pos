<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Http\Requests\Customer\Inventory\Master\CompanyMasterStorageRequest;
use \App\Traits\Customer\Inventory\Master\MasterCollectionTrait as MasterCollectionTrait;


class MasterAccountController extends Controller
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
            case "master-storage":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_storage');
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterStorage',['data'=>$data]);
           
              break;
            case "master-customer":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_customer');
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterCustomer',['data'=>$data]);
                         break;
          
            case "master-vendor":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_vendor');
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterVendor',['data'=>$data]);
             break;
          
            default:
              return true;
          }
   
        
        
    }
    
}
