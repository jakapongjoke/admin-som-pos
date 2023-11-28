<?php

namespace App\Http\Controllers\Customer\GeneralInfo;
use Illuminate\Support\Str;

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

       return $this->BranchService->getAllBranch($request->company_name);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $this->BranchService->getBranch($request->company_name,$request->form_id);

    }

    public function createBranchMockdata(Request $request){
        $formId = Str::uuid();
        if($this->BranchService->checkCanAddBranch($request->company_name,"bool")===true){
        return $this->BranchService->createBranchMockdata($request->company_name, $formId);
        }else{
            return false;
        }
    }
    public function checkBranchExists()
    {
        
    }
    public function updateInfomation(Request $request)
    {
        $formData = $request->all();
        if(!isset($formData['branch'])){
            return  $this->BranchService->updateBranchInfomation($request->company_name,$formData['head_branch'],[]);
        }else{
            return  $this->BranchService->updateBranchInfomation($request->company_name,$formData['head_branch'],$formData['branch']);
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

    public function checkCanAddBranch(Request $request){
        //count total branch as limited or not
        return $this->BranchService->checkCanAddBranch($request->company_name,"json");
        //connt branch with form_id 
      
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
