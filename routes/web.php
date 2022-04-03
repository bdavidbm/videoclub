<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'getHome']);

Route::get('login', function () {
    return view('auth.login');
});

Route::controller(CatalogController::class)->group(function(){
    Route::get('catalog', 'getIndex');
    Route::get('catalog/create', 'getCreate');
    Route::get('catalog/show{id}', 'getShow');
    Route::get('catalog/edit{id}', 'getEdit');
});

Route::post('logout', function () {
    return "saliendo de la sesión";
});
