<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Services\Customer\Inventory\Master\MasterCustomerService;

use Illuminate\Support\Facades\Auth;


class CompanyMasterCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private MasterCodeService $MasterCodeService;
    private MasterCustomerService $MasterCustomerService;
    public function __construct(MasterCodeService $MasterCodeService,MasterCustomerService $MasterCustomerService)
    {
        $this->MasterCodeService = $MasterCodeService;
        $this->MasterCustomerService = $MasterCustomerService;
    }
    public function index(Request $request)
    {
        $masterdata = $this->MasterCodeService->GetMasterCodeByType($request->company_name,'master_account_storage');
        
        $data = ['masterdata'=>$masterdata];
     
        return view('customer.backoffice.inventory.Master.MasterCustomer',['data'=>$data]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $this->MasterCustomerService->CreateCustomerMaster( $request->company_name,$request->all());
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
        return $this->MasterCustomerService->UpdateMasterCustomer($request->company_name,$request->all());
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
    public function GetCustomerMaster(Request $request){
        $perpage = $request->query("perPage")?$request->query("perPage"):10;
        $page = $request->query("page")?$request->query("page"):10;
        return $this->MasterCustomerService->GetMasterCustomer( $request->company_name,$perpage,$page);
    }
    public function ViewCustomerMaster(Request $request){
        $master_id = $request->query('master_id')?$request->query('master_id'):"";
  
        return $this->MasterCustomerService->GetCustomerMasterByid( $request->company_name,$master_id);
    }
    
    public function GetCustomerMasterByid(Request $request){
        return $this->MasterCustomerService->GetCustomerMasterByid( $request->company_name,$request->id);
    }
}
