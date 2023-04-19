<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {

    $token = $request->session()->token();

    $token = csrf_token();

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/region/create', [RegionController::class, "create"]);

Route::post('/region_insert', [RegionController::class, "store"]);
