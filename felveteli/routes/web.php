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

//show edit form
Route::get('/companies/{company}/edit',[CompanyController::class,'edit']);

//show create form
Route::get('/companies/create',[CompanyController::class,'create']);

//show single company
Route::get('/companies/{company}',[CompanyController::class, 'show']);

//update existing company
Route::put('/companies/{company}',[CompanyController::class,'update']);

//delete existing company
Route::delete('/companies/{company}',[CompanyController::class,'delete']);

//create new company in database
Route::post('/companies',[CompanyController::class, 'store']);

//show index
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//show index
Route::get('/', [CompanyController::class, 'index'])->name('companies');




//store new company data











//edit submit to update







