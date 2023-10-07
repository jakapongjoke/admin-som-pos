<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;

use \App\Traits\Customer\Inventory\Master\MasterItemTrait as MasterItemTrait;

class MasterItemsController extends Controller
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
            case "master-item":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_item');
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterItem',['data'=>$data]);
           
              break;
            case "master-collection":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_item_collection',10);
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterCollection',['data'=>$data]);
                         break;
          
            case "master-item-size":
                $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_item_size',10);
                $data = ['masterdata'=>$masterdata];
             
                return view('customer.backoffice.inventory.Master.MasterVendor',['data'=>$data]);
             break;
          
            default:
              return true;
          }
   
        
        
    }

    public  function find(Request $request){
        $r = $request->segments();
       
        switch ( $r[3]) {
            case "master-item-size":
                return $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,"master_item_size",50);
            break;
       
        }
    }
}
