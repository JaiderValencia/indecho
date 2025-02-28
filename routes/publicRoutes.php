<?php

use App\Http\Controllers\publicPagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [publicPagesController::class, 'homeView'])->name('public.home');
Route::get('/faq', [publicPagesController::class, 'faqView'])->name('public.faq');
Route::get('/nosotros', [publicPagesController::class, 'aboutView'])->name('public.about');
Route::get('/contacto', [publicPagesController::class, 'contactView'])->name('public.contact');