@php
    $linkTypeClassMap = [
        'neutral' => 'link-neutral',
        'primary' => 'link-primary',
        'secondary' => 'link-secondary',
        'accent' => 'link-accent',
        'info' => 'link-info',
        'success' => 'link-success',
        'warning' => 'link-warning',
        'error' => 'link-error',
    ];

@endphp
@props([
    /**
     * @var string 連結網址
     */
    'href' => '#',

    /**
     * @var string 連結顯示文字
     */
    'text' => '連結',

    /**
     * @var string 連結類型
     */
    'type' => 'info',
])

<a href="{{ $href }}" class="link link-{{ $type }}">{{ $text }}</a>
