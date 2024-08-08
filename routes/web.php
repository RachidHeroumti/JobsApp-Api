<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\listjobsController;
use Illuminate\Support\Facades\Route;






Route::get('/',[listjobsController::class ,'index']);
Route::get('/getone/{id}',[listjobsController::class ,'getOneItem'] );
Route::post('/add-job',[listjobsController::class,'createItem']);

Route::post('/auth/register',[AuthController::class,'Register']);
Route::post('/auth/login',[AuthController::class,'Login']);
