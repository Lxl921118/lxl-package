{{-- resources/views/components/button.blade.php --}}
@php
    $btnColorMap = [
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'accent' => 'btn-accent',
        'info' => 'btn-info',
        'success' => 'btn-success',
        'warning' => 'btn-warning',
        'error' => 'btn-error',
    ];
    $btnSizeMap = [
        'xs' => 'btn-xs',
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        'xl' => 'btn-xl',
    ];
    $btnStyleMap = [
        'outline' => 'btn-outline',
        'dash' => 'btn-dash',
        'soft' => 'btn-soft',
        'ghost' => 'btn-ghost',
        'link' => 'btn-link',
    ];
@endphp
@props([
    /**
     * @var string Button 顯示類型
     * button || submit || reset
     */
    'btnType' => 'button',

    /**
     * @var string Button 樣式類型
     * primary || secondary || accent || info || success || warning || error
     */
    'btnColor' => 'primary',

    /**
     * @var string Button 顯示文字
     */
    'btnText' => '按鈕',

    /**
     * @var string Button 大小
     * xs || sm || lg || xl
     */
    'btnSize' => '',

    /**
     * @var string Button 額外樣式
     * outline || dash || soft || ghost || link
     */
    'btnStyle' => '',
])

<button type="{{ $btnType }}"
    class="btn {{ $btnColor ? $btnColorMap[$btnColor] : '' }} {{ $btnSize ? $btnSizeMap[$btnSize] : '' }} {{ $btnStyle ? $btnStyleMap[$btnStyle] : '' }}">
    {{ $btnText }}
</button>
