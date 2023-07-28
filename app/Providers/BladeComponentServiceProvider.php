<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

final class BladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::component('layouts.learning', 'learning');
        Blade::component('layouts.base', 'app-base');
    }

    /**
     * @return void
     */
    private function configureComponent(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (): void {
            $this->registerComponent();
        });
    }

    /**
     * @return void
     */
    private function registerComponent(): void
    {
    }
}
