<?php

use App\Http\Controllers\publicRoutes;
use Illuminate\Support\Facades\Route;

Route::get('/', [publicRoutes::class, 'homeView'])->name('public.home');
Route::get('/faq', [publicRoutes::class, 'faqView'])->name('public.faq');
Route::get('/nosotros', [publicRoutes::class, 'aboutView'])->name('public.about');
Route::get('/contacto', [publicRoutes::class, 'contactView'])->name('public.contact');