<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Services\Customer\Inventory\Master\MasterItemService;

use \App\Traits\Customer\Inventory\Master\MasterItemTrait as MasterItemTrait;

class MasterItemController extends Controller
{
    private MasterCodeService $MasterCodeService;
    private MasterItemService $MasterItemService;
    public function __construct(MasterCodeService $MasterCodeService,MasterItemService $MasterItemService)
    {
        $this->MasterCodeService = $MasterCodeService;
        $this->MasterItemService = $MasterItemService;
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
             
                return view('customer.backoffice.inventory.Master.MasterItemSize',['data'=>$data]);
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
            case "master-item":
                return $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,"master_item",500);
            break;
       
        }
    }

    public function store(Request $request){

        // print_r($request->file('image_upload'));
        //  print_r($request->all());
        //  exit();
        return $this->MasterItemService->CreateItemMaster( $request->company_name,$request->all());

        
    }
    public function update(Request $request)
    {
    
        return $this->MasterItemService->UpdateMasterItem($request->company_name,$request->all());

    }
    public function destroy(Request $request)
    {
    
        $id = $request->query('id');
        return $this->MasterCodeService->deleteMasterCode($request->company_name,$id);
    }
    
    public function GetItemMaster(Request $request){
    
        
        $perpage = $request->query("perPage")?$request->query("perPage"):10;
        $page = $request->query("page")?$request->query("page"):1;

        $master_type = $request->query("master_type")?$request->query("master_type"):"master_item";

        return $this->MasterItemService->GetMasterItem( $request->company_name,$master_type ,$perpage,$page);
    }


    public function ViewItemMaster(Request $request){
        $master_id = $request->query('master_id')?$request->query('master_id'):"";
  
        return $this->MasterItemService->GetItemMasterByid( $request->company_name,$master_id);
    }
    
    public function GetItemMasterByid(Request $request){
        return $this->MasterItemService->GetItemMasterByid( $request->company_name,$request->id);
    }
    

}
