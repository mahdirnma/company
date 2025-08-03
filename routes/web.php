<?php

use App\Http\Controllers\ComponyController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/company',[ComponyController::class,'index']);
Route::get('/company/store',[ComponyController::class,'store']);
Route::get('/company/address',[ComponyController::class,'address']);
Route::get('/company/address/create',[ComponyController::class,'createAddress']);

Route::get('/organization',[OrganizationController::class,'index']);
Route::get('/organization/store',[OrganizationController::class,'store']);
Route::get('/organization/address',[OrganizationController::class,'address']);
Route::get('/organization/address/create',[OrganizationController::class,'createAddress']);

Route::get('/user',[UserController::class,'index']);
Route::get('/user/store',[UserController::class,'store']);
Route::get('/user/address',[UserController::class,'address']);
Route::get('/user/address/create',[UserController::class,'createAddress']);
