@php
    /** @var Lxl\LxlPackage\View\Components\Alert $Alert */
@endphp
@props([
    /**
     * Alert 類型
     * 
     * 支援的類型：info, success, warning, error, danger
     * 
     * @var string
     */
    'type' => 'info',
])
<div>
    {{ $Alert->type }}
</div>