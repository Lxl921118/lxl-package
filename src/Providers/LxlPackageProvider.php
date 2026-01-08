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
        // 載入視圖
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'lxl-package');

        // 註冊匿名元件（適用於 blade 檔案）
        Blade::anonymousComponentPath(__DIR__ . '/../Resources/views/components', 'lxl-package');

        // 註冊類別元件（使用命名空間，IDE 才能追蹤到 class）
        $this->loadViewComponentsAs('lxl-package', [
            \Lxl\LxlPackage\View\Components\Button::class,
        ]);

        // 發布資源
        $this->publishes([
            __DIR__ . '/../Resources/dist/css/app.css' => public_path('vendor/LxlPackage/app.css'),
        ], 'lxl-package-assets');
    }
}
