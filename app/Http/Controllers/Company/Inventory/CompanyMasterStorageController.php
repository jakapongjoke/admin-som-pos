<?php

namespace App\Http\Controllers\Company\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\CompanyMasterInventoryService as CompanyMasterInventoryService;


class CompanyMasterStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private CompanyMasterInventoryService $CompanyMasterInventoryService;
    public function __construct(CompanyMasterInventoryService $CompanyMasterInventoryService){
        $this->CompanyMasterInventoryService = $CompanyMasterInventoryService;
    }
    public function index()
    {
        $masterdata = $this->CompanyMasterInventoryService->GetMasterInventory(1,"master_account_storage");

        $data = ['key_field'=>['No','Name','Code','Branch Location','Description','Last Modified Date'],'masterdata'=>$masterdata,'key_number'=>true,'checkbox_list_field'=>true,'status_field'=>true,'action_field'=>true];
      
        return view('customer.inventory.company-storage-master',['data'=>$data]);

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
}
