<?php

use App\Http\Controllers\listjobsController;
use Illuminate\Support\Facades\Route;






Route::get('/',[listjobsController::class ,'index']);

Route::get('/{id}',[listjobsController::class ,'getOneItem'] );

