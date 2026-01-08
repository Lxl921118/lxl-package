<?php

namespace Lxl\LxlPackage\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * 按鈕的類型
     * @var string
     */
    public string $type;

    /**
     * Create a new component instance.
     * 
     * @param string $type 按鈕類型 (primary, secondary, danger)
     */
    public function __construct(string $type = 'primary')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lxl-package::components.button');
    }
}
