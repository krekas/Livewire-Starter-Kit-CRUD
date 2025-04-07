@props([
    'label',
    'placeholder' => null,
])

<fieldset class="fieldset">
    <legend class="fieldset-legend">{{ $label }}</legend>
    <input {{ $attributes->merge(['class' => 'input']) }} placeholder="{{ $placeholder }}" />
    <p class="fieldset-label">You can edit page title later on from settings</p>
</fieldset>
