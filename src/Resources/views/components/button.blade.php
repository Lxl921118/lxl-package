{{-- resources/views/components/button.blade.php --}}
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

<button class="btn btn-{{ $btnStyle }}" >{{ $btnText }}</button>