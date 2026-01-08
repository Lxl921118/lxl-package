{{-- resources/views/components/button.blade.php --}}
@props([
    /**
     * @var string Button 顯示文字
     */
    'type' => 'button || submit || reset',
])

<button type="{{ $type }}">{{ $text }}</button>