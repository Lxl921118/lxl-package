<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Alert 類型
     * @var string
     */
    public string $type;
    /**
     * Create a new component instance.
     */
    public function __construct(string $type = 'info')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lxl-package::components.alert');
    }
}
