<?php

namespace Lxl\LxlPackage\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use function PHPSTORM_META\type;

/**
 * Link Component
 * 
 * @property string $href 連結 URL
 * @property string $text 連結文字
 * @property 'neutral'|'primary'|'success'|'secondary'|'warning'|'accent'|'info'|'error' $type 連結類型
 */
class Link extends Component
{

    protected const TYPES = [
        'neutral' => 'link-neutral',
        'primary' => 'link-primary',
        'success' => 'link-success',
        'secondary' => 'link-secondary',
        'warning' => 'link-warning',
        'accent' => 'link-accent',
        'info' => 'link-info',
        'error' => 'link-error',
    ];


    public function getTypeClass(string $type): string
    {
        return self::TYPES[$type] ?? self::TYPES['neutral'];
    }


    /**
     * 連結文字
     * @var string
     */
    public string $text;
    
    /**
     * 連結類型
     * 支援的類型: 'neutral', 'primary', 'success', 'secondary', 'warning', 'accent', 'info', 'error'
     * @var string
     */
    public string $type;

    /**
     * 連結 URL
     * @var string
     */
    public string $href;
    
    /**
     * Create a new component instance.
     * 
     * @param string $text 連結文字
     * @param string $type 連結類型 (neutral|primary|success|secondary|warning|accent|info|error)
     * @param string $href 連結 URL
     */
    public function __construct(string $text = '連結', string $type = 'primary', string $href = '#')
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
