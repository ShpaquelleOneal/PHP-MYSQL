<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CarmodelController;

Route::redirect('/', 'country');
Route::resource('country', CountryController::class);

Route::resource('manufacturer', ManufacturerController::class, ['except' => ['index', 'create']]);
Route::get('{countryslug}/manufacturer', [ManufacturerController::class, 'index']);
Route::get('{countryslug}/manufacturer/create', [ManufacturerController::class, 'create']);
Route::get('manufacturer/{id}/edit', [ManufacturerController::class, 'edit'])->name('manufacturer.edit');

Route::get('manufacturer/{id}/models', [CarmodelController::class, 'index'])->name('models');
Route::get('manufacturer/{id}/models/create', [CarmodelController::class, 'create']);
Route::post('manufacturer/{id}/models', [CarmodelController::class, 'store']);