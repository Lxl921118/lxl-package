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

    /**
     * Alert 訊息內容
     * @var string
     */
    'message' => '這是一個提示訊息。',
])
<div>
    {{ $Alert->type }}、{{ $Alert->message }}
</div>