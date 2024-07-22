<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CepController;

Route::get('/search/local/{ceps}', [CepController::class, 'search']);
