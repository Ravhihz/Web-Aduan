<?php
use App\Http\Controllers\AduanController;

Route::post('/aduan', [AduanController::class, 'apiStore']);
Route::get('/aduan', [AduanController::class, 'apiIndex']);
Route::get('/aduan/{id}', [AduanController::class, 'apiShow']);
