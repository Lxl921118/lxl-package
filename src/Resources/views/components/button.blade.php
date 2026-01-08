{{-- resources/views/components/button.blade.php --}}
@php
    /**
     * Button 組件
     * 
     * @param string $btnType Button 顯示類型 (button|submit|reset)
     * @param string $btnStyle Button 樣式類型 (primary|secondary|accent|info|success|warning|error)
     * @param string $btnText Button 顯示文字
     */
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
    'btnStyle' => 'primary',

    /**
     * @var string Button 顯示文字
     */
    'btnText' => '按鈕',
])

<button class="btn btn-{{ $btnStyle ?? 'primary' }}" type="{{ $btnType ?? 'button' }}">{{ $btnText ?? '按鈕' }}</button>