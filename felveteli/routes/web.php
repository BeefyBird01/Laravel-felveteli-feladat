<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [CompanyController::class, 'index'])->name('companies');

Route::get('/companies/create',[CompanyController::class,'create']);


//store new company data




Route::get('/companies/{company}/edit',[CompanyController::class,'edit']);

Route::post('/companies',[CompanyController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//edit submit to update
Route::put('/companies/{company}',[CompanyController::class,'update']);

Route::delete('/companies/{company}',[CompanyController::class,'delete']);

Route::get('/companies/{company}',[CompanyController::class, 'show']);


