<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');
    Route::get('/frameworks', [FrameworkController::class, 'index'])->name('frameworks.index');
});
