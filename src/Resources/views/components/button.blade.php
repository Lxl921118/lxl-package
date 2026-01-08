{{-- resources/views/components/button.blade.php --}}
@props([
    /**
     * Button type
     */
    'type' => 'button',
])

<button type="{{ $type }}"> </button>