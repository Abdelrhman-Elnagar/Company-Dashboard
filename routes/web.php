<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//admin
Route::middleware('role:admin')->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::get('omar/index',function (){
        return view('dashboard.admin.index');
    })->name('omar.index');
});

//company owner
Route::middleware('role:company_owner')->group(function () {
    Route::get('second/index',function (){
        return view('dashboard.company_owner.index');
    })->name('second.index');
});

//branch manager
Route::middleware('role:branch_manager')->group(function () {
    Route::get('third/index',function (){
        return view('dashboard.branch_manager.index');
    })->name('third.index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
