<?php

use App\Http\Controllers\ComponyController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/company',[ComponyController::class,'index']);
Route::get('/company/store',[ComponyController::class,'store']);

Route::get('/organization',[OrganizationController::class,'index']);
Route::get('/organization/store',[OrganizationController::class,'store']);

Route::get('/user',[UserController::class,'index']);
Route::get('/user/store',[UserController::class,'store']);
