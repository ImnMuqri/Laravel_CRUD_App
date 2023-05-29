<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\companycontroller;
use App\Http\Controllers\AuthController;

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

Route::get('/', [companycontroller:: class,'index'])->name('companies.index');

Route::get('companies/companieslist', [companycontroller:: class,'list'])->name('companies.companieslist');

Route::get('companies/createcompany', [companycontroller:: class,'create'])->name('companies.createcompany');
Route::post('companies/store', [companycontroller:: class,'store'])->name('companies.store');

Route::get('companies/{id}/edit',[companyController::class,'edit']);
Route::put('companies/{id}/update',[companyController::class,'update']);

Route::get('companies/{id}/delete',[companyController::class,'destroy']);

Route::get('companies/{id}/show',[companyController::class,'show']);

Route::get('companies/login', [AuthController:: class,'login'])->name('companies.login');
Route::post('companies/login', [AuthController:: class,'loginpost'])->name('companies.loginpost');

Route::delete('companies/logout', [AuthController:: class,'logout'])->name('companies.logout');
