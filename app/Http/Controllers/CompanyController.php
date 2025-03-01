<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyService;
// use App\Services\Company\StoreCreator\Inventory\CompanyBaseInventoryService as CompanyBaseInventoryService;
use App\Services\Company\StoreCreator\StoreCreatorService as StoreCreatorService;


class CompanyController extends Controller
{
    private CompanyService $companyService;
    private StoreCreatorService $StoreCreatorService;

    public function __construct(CompanyService $companyService,StoreCreatorService $StoreCreatorService)
    {
        $this->companyService = $companyService;
        $this->StoreCreatorService = $StoreCreatorService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companylist = $this->companyService->paginate(10);
        return view('administrator.company-mangement.ListCompany',["company_list"=>$companylist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.company-mangement.AddCompany');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return  $this->StoreCreatorService->CreateStore(
            array(
                "company_name"=> $request->company_name,
                "company_store_name"=> $request->company_store_name,
            
            )
        
        );      
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('company.index');
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
