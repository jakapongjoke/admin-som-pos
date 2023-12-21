<?php

namespace App\Http\Controllers\Customer\Inventory\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\Master\MasterCodeService;
class MasterCodeController extends Controller
{
    private MasterCodeService $MasterCodeService;
    public function __construct(MasterCodeService $MasterCodeService)
    {
        $this->MasterCodeService = $MasterCodeService;
    }
    public function getMasterCodeById(request $request){
        return $this->MasterCodeService->getMasterCodeById($request->company_name,$request->master_id);

    }
    public function getMasterNameById(request $request){
        return $this->MasterCodeService->getMasterNameById($request->company_name,$request->master_id);

    }
    
    public function CountByMasterCode(request $request){



        return $this->MasterCodeService->countMasterByMasterCode($request->company_name,$request->master_code);

    }

    public function genStoneCode(Request $request){
        $prefixCode = $code[0].'-'.$code[1].$code[2];

        return $this->genProductMasterCode();
    }
  

}
