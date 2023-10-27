<?php

namespace App\Http\Controllers\Customer\GeneralInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\GeneralInfo\BranchService;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BranchService $BranchService)
    {
        $this->BranchService = $BranchService;
    }
    public function index()
    {
    }

    public function getAllBranch(Request $request){
        $branchType = $request->query('type')?$request->query('type'):'branch';

       return $this->BranchService->getBranch($request->company_name,$branchType);

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
    public function update(Request $request)
    {
        $rq = $request->all();
if($request->file('head_branch.brand_logo')!=""){
    echo $request->file('head_branch.brand_logo')->hashName();
}
        // if($request->head_branch['brand_logo'] instanceof File){

        // }
        // $brand_logo = $request->head_branch['brand_logo']->hashName();
// print_r($request->file('head_branch.brand_logo'));
        // return response()->json([
        //     "status"=>200,
        // ], 200);
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
    public function list ($request){

    }
}
