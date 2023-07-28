<?php

declare(strict_types=1);

use App\Http\Controllers\Admins\Process\ProcessController;
use App\Http\Controllers\Admins\Process\StoreProcessController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\UserStatusMiddleware;
use App\Http\Middleware\UserTypeMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');

Route::middleware(['auth', 'verified', UserStatusMiddleware::class])->group(function (): void {

    Route::middleware(UserTypeMiddleware::class)->group(function (): void {
        Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
    });


    Route::get('process', ProcessController::class)->name('process.index');
    Route::post('process', StoreProcessController::class)->name('store-process');
});


require __DIR__ . '/auth.php';
