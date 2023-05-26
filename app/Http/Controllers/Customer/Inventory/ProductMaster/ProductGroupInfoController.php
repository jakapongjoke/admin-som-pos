<?php

namespace App\Http\Controllers\Customer\Inventory\ProductMaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\ProductMaster\ProductGroupInfoService;
class ProductGroupInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Ht
     * tp\Response
     */
    private ProductGroupInfoService $ProductGroupInfoService;
    public function __construct(ProductGroupInfoService $ProductGroupInfoService)
    {
        $this->ProductGroupInfoService = $ProductGroupInfoService;
    }
    public function index()
    {
        //
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
    public function list(Request $request){

    }
    
    public function getInfoSizeOnce(Request $request){
        return $this->ProductGroupInfoService->getSizeOnce($request->company_name,$request->product_master_id);
    }
    public function getInfoSizeSalePriceOnce(Request $request){
        return $this->ProductGroupInfoService->getInfoSizeSalePriceOnce($request->company_name,$request->product_master_id);
    }
}
