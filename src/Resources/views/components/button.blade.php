{{-- resources/views/components/button.blade.php --}}
@props([
    /**
     * @var string Button 顯示類型
     */
    'type' => 'button || submit || reset',

    /**
     * @var string Button 顯示文字
     */
    'text' => '按鈕',
])

<button type="{{ $type }}">{{ $text }}</button>