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

         // 註冊類別元件命名空間（自動解析所有元件，支援巢狀目錄）
        Blade::componentNamespace('Lxl\\LxlPackage\\View\\Components', 'lxl-package');


        // 發布資源
        $this->publishes([
            __DIR__ . '/../Resources/dist/css' => public_path('vendor/lxl921118/lxl-package/css'),
        ], 'lxl-package-assets');
    }
}
