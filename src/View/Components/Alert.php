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
     * Alert 訊息內容
     * @var string
     */
    public string $message;



    public function __construct(string $type = 'info', string $message = '這是一個提示訊息。')
    {
        $this->type = $type;
        $this->message = $message;
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
