<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReparacionController;

Route::get('/', function () {
    return redirect('/reparaciones');
});

Route::resource('reparaciones', ReparacionController::class);
