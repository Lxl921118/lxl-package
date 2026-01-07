<?php

namespace Lxl\LxlPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class LxlPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'lxl-package');

        Blade::anonymousComponentPath(__DIR__ . '/../Resources/views', 'lxl-package');

        $this->publishes([
            __DIR__ . '/../Resources/dist/app.css' => public_path('vendor/LxlPackage/app.css'),
        ], 'lxl-package-assets');
    }
}
