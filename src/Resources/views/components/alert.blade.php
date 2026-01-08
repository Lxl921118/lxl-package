{{--
  Alert 元件
  用於顯示不同類型的提示訊息
--}}

@php
/**
 * @var string $type Alert 類型 - 支援的類型：info, success, warning, error, danger
 * @var string $message Alert 訊息內容
 */
@endphp

@props([
    'type' => 'info',
    'message' => '這是一個提示訊息。',
])

<div>
    {{ $slot->isEmpty() ? $message : $slot }}
</div>
