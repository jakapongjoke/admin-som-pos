<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Services\Customer\Inventory\Master\MasterStoneService;
use Illuminate\Support\Facades\Response;
use App\Services\Customer\Inventory\ProductMaster\ProductStoneMasterService;


class MasterStoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    private MasterCodeService $MasterCodeService;
    private MasterStoneService $MasterStoneService;
    private ProductStoneMasterService $ProductStoneMasterService;
    public function __construct(MasterCodeService $MasterCodeService,MasterStoneService $MasterStoneService,ProductStoneMasterService $ProductStoneMasterService)
    {
        $this->MasterCodeService = $MasterCodeService;
        $this->MasterStoneService = $MasterStoneService;
        $this->ProductStoneMasterService = $ProductStoneMasterService;
    }

    public function findByMasterStoneId(Request $request){
        $r = $request->segments();
        switch ($r[2]) {
            case "master-stone":
                return  $this->MasterCodeService->GetMasterCodeByIdJson($request->company_name,$request->query('master_id'),200);
            break;
        }
    }
    public function updateStatus(Request $request){
       return $this->MasterCodeService->updateMasterStatus($request->company_name,$request->master_id,$request->master_status);

    }
    public function findByType(Request $request){
        $r = $request->segments();
        $page = $request->query('page')?$request->query('page'):1;
        $perPage = $request->query('perpage')?$request->query('perpage'):200;

        switch ($r[3]) {
            case "master-stone-name":
   

                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_name',$perPage,$page);     
                break;
            case "master-stone-group":
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_group',$perPage,$page);     
                break;
            case "master-stone-size":
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_size',$perPage,$page);     
                break;

            case "master-stone-shape":
    
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_shape',$perPage,$page);     
                break;
            case "master-stone-color":
    
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_color',$perPage,$page);     
                break;
            case "master-stone-color":
    
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_color',$perPage,$page);     
                break;
            case "master-stone-clarity":
    
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_clarity',$perPage,$page);     
                break;
            case "master-stone-cutting":
    
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_stone_cutting',$perPage,$page);     
                break;
            case "master-certificate-type":
    
                return  $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,'master_certificate_type',$perPage,$page);     
                break;

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
               case "master-stone":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_name',10);     
                   
                   $data = ['masterdata'=>$masterdata,"master_type"=>"master_stone_name"];
                
                   return view('customer.backoffice.inventory.Master.MasterStone',['data'=>$data]);
                break;
               case "master-stone-group":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_group',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterStoneGroup',['data'=>$data]);
                break;
               case "master-stone-shape":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_shape',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterStoneShape',['data'=>$data]);
                break;
               case "master-stone-color":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_color',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterStoneColor',['data'=>$data]);
                break;
               case "master-clarity":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_clarity',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterStoneClarity',['data'=>$data]);
                break;
               case "master-cutting":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_cutting',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterStoneCutting',['data'=>$data]);
                break;
               case "master-stone-size":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_stone_size',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterStoneSize',['data'=>$data]);
                break;
             
               case "master-certificate-type":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_certificate_type',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterCertificateType',['data'=>$data]);
                break;
             //
               case "master-base-metal":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_metal_base',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterBaseMetal',['data'=>$data]);
                break;
               case "master-metal":
                   $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_metal',10);
                   $data = ['masterdata'=>$masterdata];
                
                   return view('customer.backoffice.inventory.Master.MasterMetal',['data'=>$data]);
                break;
             
               default:
                 return true;
             }
      
           
           
       }


    public function create(Request $request)
    {
        DB::table('ananta_master_code')->insert([
            'master_code' =>  $curent_master_type."-".Str::random(10),
            'running_number' => $i+1,
            'parent_id' => rand(1,25),
            'master_name' => "test_master_".Str::random(10),
            'master_type' =>  "master_stone_name",
            'master_price' => 0,
            'master_status' => 'active',
            'master_image' => json_encode(array($img[rand(0,count($img)-1)])),
        ]);
    }
    public function ValidateData(Request $request){
        return response()->json([
            "message"=>"validation passed",
            "status"=>"complete"
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = $request->segments();
        switch ($r[2]) {
             case "master-stone":
                $data = [
                    "parent_id"=>$request->parent_id,
                    "master_name"=>$request->master_name,
                    "master_code"=>$request->master_code,
                    "master_description"=>$request->desctiption,
                    "master_type"=>$request->master_type,
                    "master_status"=>$request->master_status,
                ];
               if($this->MasterCodeService->addMasterCode($request->company_name,$data )){
                return response()->json([
                    "status" => 200,
                    "message" =>"Create Complete" ,
                ], 200);
               }
        
              

             break;

             case "master-basic-info":
                $data = [
                    "parent_id"=>0,
                    "master_name"=>$request->master_name,
                    "master_code"=>$request->master_code,
                    "master_description"=>$request->description,
                    "master_type"=>$request->master_type,
                    "master_status"=>$request->master_status,
                ];
                if($this->MasterCodeService->addMasterCode($request->company_name,$data )){
                    return response()->json([
                        "status" => 200,
                        "message" =>"Create Complete" ,
                    ], 200);
                   }
            
                  

             default:
             return true;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $r = $request->segments();
        switch ($r[2]) {
             case "master-stone":
                $data = [
                    "parent_id"=>$request->parent_id,
                    "master_name"=>$request->master_name,
                    "master_code"=>$request->master_code,
                    "master_description"=>$request->desctiption,
                    "master_type"=>$request->master_type,
                    "master_status"=>$request->master_status,
                ];
                return $this->MasterCodeService->updateMasterCode($request->company_name,$data ,$request->master_id);
        
             break;
             case "master-basic-info":
                $data = [
                    "parent_id"=>0,
                    "master_name"=>$request->master_name,
                    "master_code"=>$request->master_code,
                    "master_description"=>$request->description,
                    "master_type"=>$request->master_type,
                    "master_status"=>$request->master_status,
                ];
                echo $request->master_desctiption;
                return $this->MasterCodeService->updateMasterCode($request->company_name,$data ,$request->master_id);
        
             break;
             default:
             return true;
        }      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->query('id');
        return $this->MasterCodeService->deleteMasterCode($request->company_name,$id);

    }
    public  function find(Request $request){
        $r = $request->segments();
        $page = $request->query('page');
        $perPage = $request->query('perPage');

        switch ( $r[3]) {
        case "master-stone-group":
        
            return $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,"master_stone_group",$perPage,$page);
        break;
        case "master-stone-name":

            return $this->MasterStoneService->GetStoneNameByStoneGroup($request->company_name,$request->parent_id,"master_stone_name",$perPage,$page);

        break;
        case "master-stone-shape":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_shape",$perPage,$page);

        break;
        case "master-stone-color":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_color",$perPage,$page);

        break;
        case "master-stone-clarity":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_clarity",$perPage,$page);

        break;
        case "master-stone-cutting":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_cutting",$perPage,$page);

        break;
        case "master-certificate-type":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_certificate_type",$perPage,$page);

        break;
        case "master-stone-size":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_size",$perPage,$page);

        break;



        }

    }

    public function getProductStoneMasterCodeInfoByProductStoneId(Request $request){
        $page = $request->query('page');
        $perPage = $request->query('perPage');
        return $this->MasterCodeService->getProductStoneMasterCodeInfoByProductStoneId($request->company_name,$request->parent_id, $perPage,$page);
    }

}
