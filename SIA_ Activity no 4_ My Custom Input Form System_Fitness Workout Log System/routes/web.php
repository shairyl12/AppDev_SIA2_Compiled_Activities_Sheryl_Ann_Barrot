<?php

use App\Http\Controllers\FormController;

// 📍 SHOW FORM
Route::get('/form', [FormController::class, 'create']);

// 📍 HANDLE FORM SUBMISSION
Route::post('/form', [FormController::class, 'store']);