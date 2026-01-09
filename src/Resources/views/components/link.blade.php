{{--
@props([
    'href' => '#',
    'type' => 'primary', // 支援: neutral, primary, success, secondary, warning, accent, info, error
    'text' => '連結'
])
--}}
@props(['href', 'type', 'text'])

<a href="{{ $href }}" class="link {{ $getTypeClass($type) }}">{{ $slot->isEmpty() ? $text : $slot }}</a>
