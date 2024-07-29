<?php

use Illuminate\Support\Facades\Route;
use App\Models\ListJob ;





Route::get('/', function () {
    return View('listes',[
        'heading'=>'latest jobs',
        'listes'=>ListJob::all()
    ]);
});

Route::get('/hello', function () {
    return "<h1>Hello Page</h1>";
});

