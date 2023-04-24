<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Services\Customer\Inventory\Master\MasterStoneService;
use Illuminate\Support\Facades\Response;


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
    public function __construct(MasterCodeService $MasterCodeService,MasterStoneService $MasterStoneService)
    {
        $this->MasterCodeService = $MasterCodeService;
        $this->MasterStoneService = $MasterStoneService;
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
                   $data = ['masterdata'=>$masterdata];
                
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


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public  function find(Request $request){
        $r = $request->segments();
       
        switch ( $r[3]) {
        case "master-stone-group":
            return $this->MasterCodeService->GetMasterCodeByTypeJson($request->company_name,"master_stone_group",50);
        break;
        case "master-stone-name":
            return $this->MasterStoneService->GetStoneNameByStoneGroup($request->company_name,$request->parent_id,"master_stone_group",50);

        break;
        case "master-stone-shape":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_shape",50);

        break;
        case "master-stone-color":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_color",50);

        break;
        case "master-stone-clarity":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_clarity",50);

        break;
        case "master-stone-cutting":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_stone_cutting",50);

        break;
        case "master-certificate-type":
            return $this->MasterStoneService->GetMasterCodeByTypeJson($request->company_name,"master_certificate_type",50);

        break;



        }

    }



}
