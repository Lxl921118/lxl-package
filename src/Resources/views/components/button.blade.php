{{-- resources/views/components/button.blade.php --}}
@props([
    /**
     * @var string Button 顯示類型
     */
    'btnType' => 'button || submit || reset',

    /**
     * @var string Button 樣式類型
     */
    'btnStyle' => 'primary || secondary || accent || info || success || warning || error',

    /**
     * @var string Button 顯示文字
     */
    'btnText' => '按鈕',
])

<button class="btn btn-{{ $btnStyle ?? 'primary' }}" type="{{ $btnType ?? 'button' }}">{{ $btnText ?? '按鈕' }}</button>