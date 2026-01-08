{{--
  Alert 元件
  用於顯示不同類型的提示訊息，支援 info、success、warning、error 等類型
--}}
@props([
    /**
     * Alert 類型
     * 
     * 支援的類型：info, success, warning, error, danger
     * 
     * @var string
     */

    'type' => 'info',

    /**
     * Alert 訊息內容
     * @var string
     */
    'message' => '這是一個提示訊息。',
])
<div>
    {{ $type }}、{{ $message }}
</div>