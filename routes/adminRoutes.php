<?php
use App\Http\Controllers\adminPagesController;
use App\Http\Controllers\documentController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::prefix('/panel')->group(function () {
    Route::get('/', [adminPagesController::class, 'homeView'])->name('admin.home');
});

Route::prefix('/documents')->group(function () {
    Route::get('/{id}', [documentController::class, 'getById'])->name('documents.getById');
    Route::get('/', [documentController::class, 'getByTitle'])->name('documents.getByTitle');
    Route::post('/', [documentController::class, 'createDocument'])->name('documents.upload');
    Route::post('/update/{id}', [documentController::class, 'updateFile'])->name('documents.update');
    Route::delete('/{id}', [documentController::class, 'deleteDocument'])->name('documents.delete');
});

Route::prefix('/users')->group(function () {
    Route::get('/id/{id}', [userController::class, 'getById'])->name('users.getById');
    route::get('/{data}', [userController::class, 'gethByField'])->name('users.getByField');
    Route::get('/', [userController::class, 'getAll'])->name('users.getAll');
    Route::post('/', [userController::class, 'register'])->name('users.register');
    Route::put('/', [userController::class, 'update'])->name('users.update');
    Route::delete('/', [userController::class, 'delete'])->name('users.delete');
});

Route::prefix('/roles')->group(function () {
    Route::get('/id/{id}', [roleController::class, 'getById'])->name('roles.getById');
    Route::get('/{data}', [roleController::class, 'getByField'])->name('roles.getByField');
    Route::get('/', [roleController::class, 'getAll'])->name('roles.getAll');
    Route::post('/', [roleController::class, 'create'])->name('roles.register');
    Route::put('/{id}', [roleController::class, 'update'])->name('roles.update');
    Route::delete('/{id}', [roleController::class, 'delete'])->name('roles.delete');
});