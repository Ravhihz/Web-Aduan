<?php

use App\Http\Controllers\AduanController;

Route::get('/', [AduanController::class, 'create']);
Route::post('/aduan', [AduanController::class, 'store']);

Route::get('/admin/aduan', [AduanController::class, 'index']);
Route::get('/admin/aduan/{id}', [AduanController::class, 'show']);
Route::post('/admin/aduan/{id}/balas', [AduanController::class, 'balas']);
Route::delete('/admin/aduan/{id}', [AduanController::class, 'destroy']);
