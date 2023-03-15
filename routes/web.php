<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\Customer\Inventory\Master\CompanyMasterStorageController;
use App\Http\Controllers\CompanyController;
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
   

    Route::middleware('auth:company_users')->group(function () {
    Route::get('/staff-dashboard', [CompanyUserController::class, 'dashboard'])->name('company-staff-dashboard'); 
    
    Route::get('/company-master-storage', [CompanyMasterStorageController::class, 'index'])->name('company-master-storage');

    // });
    Route::get('/logout', [CompanyUserController::class, 'destroy'])
    ->name('company.logout');


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