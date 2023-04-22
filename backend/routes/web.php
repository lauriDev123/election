<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {

    $token = $request->session()->token();

    $token = csrf_token();

});

Route::get('/', function () {
    return view('welcome');
});

//Routes de region
Route::get('/region_create', [RegionController::class, "create"]);
Route::post('/region_insert', [RegionController::class, "save"])->name('add');
Route::get('/region_list', [RegionController::class, "getAllRegions"]);
Route::get('/region_delete/{id}', [RegionController::class, "deleteRegionById"]);
Route::get('/region_edit', [RegionController::class, "editRegionById"]);

//Routes de participant
Route::get('/participant_create', [ParticipantController::class, "create"]);
Route::post('/participant_insert', [ParticipantController::class, "save"])->name('addParticipant');
Route::get('/participant_list', [ParticipantController::class, "getAllParticipants"]);
Route::get('/participant_delete/{id}', [ParticipantController::class, "deleteParticipantById"]);
Route::get('/participant_edit', [ParticipantController::class, "editparticipantById"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
