<?php

namespace App\Http\Controllers\Customer\Inventory\ProductMaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Customer\Inventory\ProductMaster\ProductStoneMasterService;


class ProductMasterStoneController extends Controller
{
    private ProductStoneMasterService $ProductStoneMasterService;
    public function __construct(ProductStoneMasterService $ProductStoneMasterService)
    {
        $this->ProductStoneMasterService = $ProductStoneMasterService;
        
    }


    public function getProductMasterStoneById(Request $request){
        return $this->ProductStoneMasterService->getById($request->company_name,$request->id);
    }



    public function genStoneCodeMasterId(Request $request){
        $rq = $request->all();
        $master_id_list = [
            "stone_group"=>$rq['stone_group'],
            "stone_name"=>$rq['stone_name'],
            "stone_shape"=>$rq['stone_shape'],
            "stone_cutting"=>$rq['stone_cutting']
        ];
        return $this->ProductStoneMasterService->genStoneCode($request->company_name,$master_id_list);
    }

    public function getCountProductStoneFromStoneMasterId(Request $request){
        $master_id = $request->query('master_id');
        $field_name = $request->query('field_name');
        return $this->ProductStoneMasterService->checkMasterUsingInProductMaster($request->company_name,$field_name,$master_id);


    }

    public function create(Request $request){
       $formdata =  $request->list_uploaded_image;
       $file = $request->masterImage;
       $fileupload = array();
           // Perform desired operations with the file

    

         if(is_null($file)===false){
           for($i=0 ; $i<count($file);$i++){
            $fileName = $request->company_name.$file[$i]['imageFile']->hashName();  
         
           $fileupload[$i]  =   $file[$i]['imageFile']->storeAs("public/customer_images/$request->company_name/product_master/stone", $fileName,'local');

           }
         }


        $file_cert = $request->masterCertImage;

        if(is_null($file_cert)===false){
            for($i=0 ; $i<count($file_cert);$i++){
             $fileCertName = $request->company_name.$file_cert[$i]['imageFile']->hashName();  
          
            $fileCertUpload[$i]  =   $file[$i]['imageFile']->storeAs("public/customer_images/$request->company_name/product_master/stone/certificate", $fileCertName,'local');
 
            }
          }


         $product_stone_data = [
            "product_stone_code"=>$request->productMasterGeneralData['stone_code'],
            "stone_group"=>$request->productMasterGeneralData['stone_group'],
            "stone_shape"=>$request->productMasterGeneralData['stone_shape'],
            "stone_color"=>$request->productMasterGeneralData['stone_color'],
            "stone_cutting"=>$request->productMasterGeneralData['stone_cutting'],
            "master_certificate"=>$request->productMasterGeneralData['master_certificate_type'],
            "master_description"=>$request->productMasterGeneralData['master_detail'],
            "master_status"=>$request->productMasterGeneralData['status'],
            "master_image"=>json_encode($fileupload),
            "master_certificate_image"=>json_encode($fileCertUpload),
        ];
        $product_master_data = [
            "product_stone_data"=>$product_stone_data,
            "product_group_info_data"=>$request->productInfoGroupData[0]

        ];
    //  print_r($request->productMasterGeneralData);
        return $this->ProductStoneMasterService->insertProductMasterStone($request->company_name,$product_master_data);




    //    foreach($file as $f){
 

    //      echo $fileName;
    //    }
    //    return response()->json('File uploaded successfully');

    //    return $request->all();
    }

    public function getMasterInfoByProductStoneGroupId(Request $request){
        $r = $request->segments();
        $page = $request->query('page')?$request->query('page'):1;
        $perPage = $request->query('perpage')?$request->query('perpage'):10;
      return   $this->ProductStoneMasterService->getMasterInfoByProductStoneGroupId($request->company_name,$request->stone_group_id,0,$perPage,0);
    }
    
}
