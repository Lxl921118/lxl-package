# Package 練習
* 這是 PHP Blade 用的 components

## 安裝

```bash
composer require lxl921118/lxl-package
```

## VS Code 使用者建議

為了在 VS Code 中獲得元件提示支援，建議安裝以下擴充功能：

### Laravel Extra Intellisense



## 使用方式

### Button 元件

```blade
<x-lxl-package::button>
    點擊我
</x-lxl-package::button>
```

## 開發

### 發布資源

```bash
php artisan vendor:publish --tag=lxl-package-assets
```


### 引入css

``` css
@import "path/to/xuanlinliu-package/resources/css/app.css";
```

OR

``` html
<link rel="stylesheet" href="{{ asset('vendor/LxlPackage/app.css') }}">
```
