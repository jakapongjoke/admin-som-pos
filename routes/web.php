<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
})->name("home");


Route::middleware('guest')->group(function () {
    Route::post('login', [LoginController::class, 'authenticate'])->name('login');

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';