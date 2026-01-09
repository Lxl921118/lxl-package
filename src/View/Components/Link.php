<?php

namespace Lxl\LxlPackage\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use function PHPSTORM_META\type;

class Link extends Component
{
    public string $text;
    public string $type;
    public string $href;
    /**
     * Create a new component instance.
     */
    public function __construct(string $text = '連結', string $type = 'neutral', string $href = '#')
    {
        $this->text = $text;
        $this->type = $type;
        $this->href = $href;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lxl-package::components.link');
    }
}
