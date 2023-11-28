<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\Customer\Inventory\Master\MasterCodeService;

use App\Http\Controllers\Customer\Inventory\Master\MasterCodeController;
use App\Http\Controllers\Customer\Inventory\Master\MasterAccountController;
use App\Http\Controllers\Customer\Inventory\Master\MasterStoneController;
use App\Http\Controllers\Customer\Inventory\Master\MasterItemsController;
use App\Http\Controllers\Customer\Inventory\Master\CompanyMasterStorageController;
use App\Http\Controllers\Customer\Inventory\ProductMaster\ProductMasterController;
use App\Http\Controllers\Customer\Inventory\ProductMaster\ProductMasterStoneController;
use App\Http\Controllers\Customer\Inventory\ProductMaster\ProductGroupInfoController;
use App\Http\Controllers\Customer\GeneralInfo\BranchController;
use App\Http\Controllers\CountrySelectorContoller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:company_users')->prefix('master')->group(function () {
    Route::get('/test',function(){
        return "aaa";
            });

});

// Route::prefix('master')->group(function () {
// Route::get('/{master_type}',[MasterStoneController::class,'find']);

// });

Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('master')->group(function ($company_name) {
    Route::get('master-item/',[MasterItemsController::class,'find']);
    Route::get('master-item/{master_type}',[MasterItemsController::class,'find']);
    Route::get('master-stone/view/',[MasterStoneController::class,'findByMasterStoneId']);

    Route::get('master-stone/{master_type}',[MasterStoneController::class,'findByType']);

    // Route::get('master-stone/{master_type}',[MasterStoneController::class,'find']);
    // Route::get('master-stone/{master_type}/{per_page}/{page}',[MasterStoneController::class,'findByType']);
    Route::get('master-stone/master-stone-name/{parent_id}',[MasterStoneController::class,'find']);

    /* สำหรับดึงค่ามาทำ selectbox ของ product master stone modal */
    Route::get('get-master-info-product-stone/{parent_id}',[MasterStoneController::class,'getProductStoneMasterCodeInfoByProductStoneId']);


    Route::post('/master-stone',[MasterStoneController::class,'store']);

    Route::post('/master-basic-info',[MasterStoneController::class,'store']);
    Route::put('/master-basic-info',[MasterStoneController::class,'update']);
    Route::delete('/master-basic-info',[MasterStoneController::class,'destroy']);


    Route::put('/master-stone',[MasterStoneController::class,'update']);
    Route::put('/master-stone/changestatus/',[MasterStoneController::class,'updateStatus']);
    Route::delete('/master-stone',[MasterStoneController::class,'destroy']);
    Route::post('/master-stone-validate',[MasterStoneController::class,'ValidateData']);


    Route::post('/master-stroage-validate',[CompanyMasterStorageController::class,'ValidateData']);
    Route::post('/master-stroage',[CompanyMasterStorageController::class,'store']);
    Route::post('/master',[CompanyMasterStorageController::class,'store']);
    Route::get('/get-by-id/{master_id}',[MasterCodeController::class,'getMasterCodeById']);
    Route::get('/master-name-by-id/{master_id}',[MasterCodeController::class,'getMasterNameById']);

    Route::get('/get-master-info-by-stone-group/{stone_group_id}',[ProductMasterStoneController::class,'getMasterInfoByProductStoneGroupId']);

});
Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('check')->group(function ($company_name) {


    Route::get('/add_branch',[BranchController::class,'checkCanAddBranch']);

});
Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('general-infomation')->group(function ($company_name) {
    Route::post('/add_mock_branch',[BranchController::class,'createBranchMockdata']);

    Route::post('/branch',[BranchController::class,'create']);
    Route::post('/branch/updateinfomation',[BranchController::class,'updateInfomation']);

    // Route::put('/branch',[BranchController::class,'update']);


    Route::get('/getbranch',[BranchController::class,'getAllBranch']);

});


Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('product-master')->group(function ($company_name) {

    Route::get('/product-master-stone/list/{perPage}/{page}',[ProductMasterController::class,'list']);


    Route::get('/product-master-stone/searchstone/{stone_code}',[ProductMasterController::class,'list']);

    Route::post('/product-master-stone/genarate-stone-code',[ProductMasterStoneController::class,'genStoneCodeMasterId']);


    Route::get('/product-master-stone/get-by-id/{id}',[ProductMasterStoneController::class,'getProductMasterStoneById']);

    Route::post('/product-master-stone',[ProductMasterStoneController::class,'create']);

    Route::get('/get-count-from-stone-name-id',[ProductMasterStoneController::class,'getCountProductStoneFromStoneMasterId']);


});
Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('product-master-group-info')->group(function ($company_name) {
    Route::get('/get-size-once/{product_master_id}/{',[ProductGroupInfoController::class,'getInfoSizeOnce']);
    Route::get('/get-size-sale-price/{product_master_id}',[ProductGroupInfoController::class,'getInfoSizeSalePriceOnce']);


});


Route::middleware('auth:company_users')->prefix('master')->group(function () {

    
    Route::get('/countries',[CountrySelectorContoller::class,'ListCountry']);
    Route::get('/states/{CountryID}',[CountrySelectorContoller::class,'ListStates']);
    Route::get('/cities/{StateID}',[CountrySelectorContoller::class,'ListCities']);
    

});


