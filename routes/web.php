<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcosystemController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/ecosystems', [EcosystemController::class, 'index'])->name('ecosystems');
Route::get('/home', [HomeController::class, 'index'])->name('home');