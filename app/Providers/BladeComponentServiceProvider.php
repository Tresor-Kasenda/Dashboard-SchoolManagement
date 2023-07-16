<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class BladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::component('layouts.backend', 'backend');
    }

    /**
     * @return void
     */
    private function configureComponent(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (): void {
            $this->registerComponent('');
        });
    }

    /**
     * @param  string  $component
     * @return void
     */
    private function registerComponent(string $component): void
    {
        Blade::component('admins.components'.$component, 'vex'.$component);
    }
}
