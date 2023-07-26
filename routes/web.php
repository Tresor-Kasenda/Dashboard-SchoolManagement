<?php

declare(strict_types=1);

use App\Http\Controllers\Admins\Process\ProcessController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\UniversityMiddleware;
use App\Http\Middleware\UserStatusMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('home');

Route::middleware(['auth', 'verified', UserStatusMiddleware::class])->group(function (): void {
    Route::middleware(UniversityMiddleware::class)->group(function (): void {
        Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
    });


    Route::get('process', ProcessController::class)->name('process.index');
});


require __DIR__.'/auth.php';
