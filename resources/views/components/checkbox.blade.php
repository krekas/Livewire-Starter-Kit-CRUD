@props([
    'label',
    'checked' => false,
    'disabled' => false,
])

@php
    $for = 'checkbox' . str()->random(6)
@endphp

<div class="flex space-x-2">
    <input type="checkbox" @checked($checked) @disabled($disabled) {{ $attributes->merge(['class' => 'checkbox']) }} aria-labelledby="{{ $for }}" />
    <label for="{{ $for }}" class="fieldset-label">{{ $label }}</label>
</div>
