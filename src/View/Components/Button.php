<?php

namespace Lxl\LxlPackage\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    /**
     * 按鈕的類型(primary)
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->type = 'primary';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
