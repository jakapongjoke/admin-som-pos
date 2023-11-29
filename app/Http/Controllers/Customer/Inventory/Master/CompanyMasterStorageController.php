<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Services\Customer\Inventory\Master\MasterStorageService;
use App\Http\Requests\Customer\Inventory\Master\CompanyMasterStorageRequest;
use Illuminate\Support\Facades\Auth;

class CompanyMasterStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private MasterCodeService $MasterCodeService;
    private MasterStorageService $MasterStorageService;
    public function __construct(MasterCodeService $MasterCodeService,MasterStorageService $MasterStorageService)
    {
        $this->MasterCodeService = $MasterCodeService;
        $this->MasterStorageService = $MasterStorageService;
    }
    public function index(Request $request)
    {
         $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_storage',10);
         $data = ['masterdata'=>$masterdata];
         return view('customer.backoffice.inventory.Master.MasterStorage',['data'=>$data]);
    }
    public function ViewStorageMaster(Request $request){
        $master_id = $request->query('master_id')?$request->query('master_id'):"";
        if($master_id!==""){
            return $this->MasterStorageService->GetByid($request->company_name,$master_id);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function GetStorageMaster(Request $request){
        $perpage = $request->query("perPage")?$request->query("perPage"):10;
        $page = $request->query("page")?$request->query("page"):10;
        return $this->MasterStorageService->GetStorageMaster( $request->company_name,$perpage,$page);
    }

    public function list(){

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       return $this->MasterCodeService->CreateMasterStorage($request->company_name,$request->all());
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
}
