<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('applications.index'));

Route::prefix('applications')->name('applications.')->group(function (): void {
    Route::get('/', [ApplicationController::class, 'index'])->name('index');
    Route::get('/create', [ApplicationController::class, 'create'])->name('create');
    Route::post('/', [ApplicationController::class, 'store'])->name('store');
    Route::get('/{application}', [ApplicationController::class, 'show'])->name('show');
});
