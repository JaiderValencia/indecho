<?php
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::post('/document', [adminController::class, 'uploadFile']);
