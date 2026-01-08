@php
/**
 * @var string $type Alert 類型 - 支援的類型：info, success, warning, error
 * @var string $message Alert 訊息內容
 */
@endphp

@props([
    'type' => 'info',
    'message' => '這是一個提示訊息。',
])
<div role="alert" class="alert alert-{{ $type }} alert-soft">
  <span>{{ $message }}</span>
</div>