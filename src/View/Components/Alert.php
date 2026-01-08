<?php

namespace Lxl\LxlPackage\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Alert 元件
 * 
 * 用於顯示不同類型的提示訊息，支援 info、success、warning、error 等類型
 * 
 * @package Lxl\LxlPackage\View\Components
 */
class Alert extends Component
{
    /**
     * Alert 類型
     * 
     * 支援的類型：info, success, warning, error, danger
     * 
     * @var string
     */
    public string $type;
    /**
     * Create a new component instance.
     * 
     * @param string $type Alert 類型，預設為 'info'
     */
    public function __construct(string $type = 'info')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     * 
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('lxl-package::components.alert');
    }
}
