<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyUserController;

use App\Http\Controllers\Customer\Inventory\Master\CompanyMasterStorageController;
use App\Http\Controllers\Customer\Inventory\Master\CompanyMasterCustomerController;
use App\Http\Controllers\Customer\Inventory\Master\CompanyMasterVendorController;
use App\Http\Controllers\Customer\Inventory\Master\MasterAccountController;
use App\Http\Controllers\Customer\Inventory\Master\MasterStoneController;
use App\Http\Controllers\Customer\Inventory\ProductMaster\ProductMasterController;
use App\Http\Controllers\Customer\Inventory\Master\MasterItemsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// })->name("home");




Route::domain('admin-manage.'.env('DOMAIN_NAME','som-pos.test'))->group(function () {
    
    Route::get('/', function(Request $request){
    abort(404);

    });
    Route::get('/manage',[UserController::class,'loginpage'] );


        Route::middleware('guest')->group(function () {
            Route::post('login', [LoginController::class, 'authenticate'])->name('login');
            Route::get('login',[UserController::class,'loginpage'] )->name('home');


        });
        Route::middleware('auth')->group(function () {
            Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
            Route::get('company', [CompanyController::class, 'index'])->name('list-company');
            Route::post('company', [CompanyController::class, 'store'])->name('add-company-request');
            Route::get('add-company', [CompanyController::class, 'create'])->name('add-company');
            Route::get('add-user', [UserController::class, 'create'])->name('add-user');

            Route::get('logout', [LoginController::class, 'destroy'])
                        ->name('logout');
        
        });

});

Route::domain('{company_name}.'.env('DOMAIN_NAME','som-pos.test'))->group(function ($company_name) {
  
    Route::get('/staff-login', [CompanyUserController::class, 'login'])->name('company-user-login-page');

    Route::post('/staff-login', [CompanyUserController::class, 'handleLogin'])->name('company.stafflogin');
   
 Route::get('/staff-dashboard', [CompanyUserController::class, 'dashboard'])->name('staff-dashboard'); 




    Route::middleware('auth:company_users')->prefix('master')->group(function () {

    
    Route::get('/master-storage', [MasterAccountController::class, 'index'])->name('master-storage');
    Route::get('/master-customer', [MasterAccountController::class, 'index'])->name('master-customer');
    Route::get('/master-vendor', [MasterAccountController::class, 'index'])->name('master-vendor');

    // Route::get('/master-customer', [CompanyMasterCustomerController::class, 'index'])->name('master-customer');
    // Route::get('/master-vendor', [CompanyMasterVendorController::class, 'index'])->name('master-vendor');


    Route::get('/master-item',[MasterItemsController::class, 'index'])->name('master-item');

    Route::get('/master-collection', [MasterItemsController::class, 'index'])->name('master-collection');
    Route::get('/master-item-size', [MasterItemsController::class, 'index'])->name('master-item-size');


    // ใช้ MasterStoneController ชั่วคราว

    Route::get('/master-metal', [MasterStoneController::class, 'index'])->name('master-metal');

    Route::get('/master-base-metal',  [MasterStoneController::class, 'index'])->name('master-base-metal');



    Route::get('/master-stone', [MasterStoneController::class, 'index'])->name('master-stone');
    Route::get('/master-stone-group', [MasterStoneController::class, 'index'])->name('master-stone-group');
    Route::get('/master-stone-shape', [MasterStoneController::class, 'index'])->name('master-stone-shape');
    Route::get('/master-stone-color', [MasterStoneController::class, 'index'])->name('master-stone-color');
    Route::get('/master-clarity', [MasterStoneController::class, 'index'])->name('master-stone-clarity');
    Route::get('/master-cutting', [MasterStoneController::class, 'index'])->name('master-stone-cutting');
    Route::get('/master-stone-size', [MasterStoneController::class, 'index'])->name('master-stone-size');
    Route::get('/master-certificate-type', [MasterStoneController::class, 'index'])->name('master-certificate-type');




    // });
    Route::get('/logout', [CompanyUserController::class, 'destroy'])
    ->name('company.logout');


});

Route::middleware('auth:company_users')->prefix('product-master')->group(function () {
    Route::get('/product-master-stone', [ProductMasterController::class, 'index'])->name('product-master-stone');
    
    Route::get('/product-master-component', [ProductMasterController::class, 'index'])->name('product-master-component');
    Route::get('/product-master-jewelry', [ProductMasterController::class, 'index'])->name('product-master-jewelry');

});
});


// Route::get('/admin', [CompanyUserController::class, 'index'])->name('admin.home')->middleware("auth:webadmin");
// Route::get('/admin/login', [CompanyUserController::class, 'login'])->name('admin.login');
// Route::get('/admin/logout', [CompanyUserController::class, 'logout'])->name('admin.logout');
// Route::post('/admin/login', [CompanyUserController::class, 'handleLogin'])->name('admin.handleLogin');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';