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
use App\Http\Controllers\Customer\Inventory\ProductMaster\ProductGroupInfoController;
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
    Route::get('master-stone/{master_type}',[MasterStoneController::class,'find']);
    Route::get('master-stone/master-stone-name/{parent_id}',[MasterStoneController::class,'find']);
    Route::post('/master-stroage-validate',[CompanyMasterStorageController::class,'ValidateData']);
    Route::post('/master-stroage',[CompanyMasterStorageController::class,'store']);
    Route::post('/master',[CompanyMasterStorageController::class,'store']);
    Route::get('/get-by-id/{master_id}',[MasterCodeController::class,'getMasterCodeById']);
    Route::get('/master-name-by-id/{master_id}',[MasterCodeController::class,'getMasterNameById']);


});
Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('product-master')->group(function ($company_name) {
    Route::get('/product-master-stone/{perPage}/{page}',[ProductMasterController::class,'list']);


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


