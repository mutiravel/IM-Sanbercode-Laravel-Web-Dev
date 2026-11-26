<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/',[DashboardController::class, 'Dashboard']);

Route::get('/Register',[FormController::class, 'Register']);
Route::post('/welcome',[FormController::class, 'FormSubmit']);
;
