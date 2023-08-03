<?php

declare(strict_types=1);

use App\Http\Controllers\Admins\DashboardController;
use App\Http\Controllers\Admins\Schools\CreateSchoolController;
use App\Http\Controllers\Admins\SettingController;
use App\Http\Controllers\admins\settings\NotificationController;
use App\Http\Controllers\Admins\Settings\SecurityController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\UniversityMiddleware;
use App\Http\Middleware\UserStatusMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');

Route::middleware(['auth', 'verified', UserStatusMiddleware::class])->group(function (): void {

    Route::middleware([UniversityMiddleware::class])->group(function (): void {
        Route::get('/dashboard', DashboardController::class)
            ->name('dashboard')
            ->middleware(UniversityMiddleware::class);

        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
    });
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/', SettingController::class)
            ->name('index')
            ->middleware(UniversityMiddleware::class);
        Route::get('school', CreateSchoolController::class)->name('school-create');
        Route::get('notify', NotificationController::class)->name('notification');
        Route::get('security', SecurityController::class)->name('security');
    });

});


require __DIR__ . '/auth.php';
