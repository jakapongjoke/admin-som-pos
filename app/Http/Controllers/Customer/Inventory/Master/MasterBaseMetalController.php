<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Services\Customer\Inventory\Master\MasterBaseMetalService;

use \App\Traits\Customer\Inventory\Master\MasterBaseMetalTrait as MasterBaseMetalTrait;




class MasterBaseMetalController extends Controller
{
    private MasterCodeService $MasterCodeService;
    private MasterBaseMetalService $MasterBaseMetalService;
    public function __construct(MasterCodeService $MasterCodeService,MasterBaseMetalService $MasterBaseMetalService)
    {
        $this->MasterCodeService = $MasterCodeService;
        $this->MasterBaseMetalService = $MasterBaseMetalService;
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
        $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_item');
        $data = ['masterdata'=>$masterdata];
     
        return view('customer.backoffice.inventory.Master.MasterBaseMetal');
   
        
        
    }

    public  function find(Request $request){
     
    }

    public function store(Request $request){

        // print_r($request->file('image_upload'));
        //  print_r($request->all());
        //  exit();
        return $this->MasterBaseMetalService->CreateBaseMetalMaster( $request->company_name,$request->all());

        
    }
    public function update(Request $request)
    {
    
        return $this->MasterBaseMetalService->UpdateMasterBaseMetal($request->company_name,$request->all());

    }
    public function destroy(Request $request)
    {
    
        $id = $request->query('id');
        return $this->MasterCodeService->deleteMasterCode($request->company_name,$id);
    }
    
    public function GetBaseMetalMaster(Request $request){
    
        
        $perpage = $request->query("perPage")?$request->query("perPage"):10;
        $page = $request->query("page")?$request->query("page"):1;

        $master_type = $request->query("master_type")?$request->query("master_type"):"master_base_metal";

        return $this->MasterBaseMetalService->GetMasterBaseMetal( $request->company_name,$master_type ,$perpage,$page);
    }


    public function ViewBaseMetalMaster(Request $request){
        $master_id = $request->query('master_id')?$request->query('master_id'):"";
  
        return $this->MasterBaseMetalService->GetBaseMetalMasterByid( $request->company_name,$master_id);
    }
    
    public function GetBaseMetalMasterByid(Request $request){
        return $this->MasterBaseMetalService->GetBaseMetalMasterByid( $request->company_name,$request->id);
    }
    
}
