<?php
use App\Http\Controllers\documentController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::prefix('/documents')->group(function () {
    Route::get('/{id}', [documentController::class, 'getById'])->name('documents.getById');
    Route::get('/', [documentController::class, 'getByTitle'])->name('documents.getByTitle');
    Route::post('/', [documentController::class, 'createDocument'])->name('documents.upload');
    Route::post('/update/{id}', [documentController::class, 'updateFile'])->name('documents.update');
    Route::delete('/{id}', [documentController::class, 'deleteDocument'])->name('documents.delete');
    Route::put('/{id}', [documentController::class, 'updateFile'])->name('documents.update');
});
