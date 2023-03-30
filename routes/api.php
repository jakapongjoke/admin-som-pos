<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\Customer\Inventory\Master\MasterCodeService;
use App\Http\Controllers\Customer\Inventory\Master\MasterAccountController;
use App\Http\Controllers\Customer\Inventory\Master\MasterItemsController;
use App\Http\Controllers\Customer\Inventory\Master\CompanyMasterStorageController;
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

Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->prefix('master')->group(function ($company_name) {
Route::post('/test', function(Request $request){
    print_r( $request->all()) ;
    print_r( $request->all()) ;
});
Route::post('/master-stroage-validate',[CompanyMasterStorageController::class,'ValidateData']);
Route::post('/master-stroage',[CompanyMasterStorageController::class,'store']);
Route::post('/master',[CompanyMasterStorageController::class,'store']);

Route::get('/countries',[CountrySelectorContoller::class,'ListCountry']);
Route::get('/states/{CountryID}',[CountrySelectorContoller::class,'ListStates']);
Route::get('/cities/{StateID}',[CountrySelectorContoller::class,'ListCities']);

});

