@props([
    'label',
    'placeholder' => null,
])

<fieldset class="fieldset">
    <legend class="fieldset-legend">{{ $label }}</legend>
    <input {{ $attributes->merge(['class' => 'input']) }} placeholder="{{ $placeholder }}" />
    @error($attributes->first('wire:model'))
        <p class="text-sm text-red-600 dark:text-red-400 space-y-1">{{ $message }}</p>
    @enderror
</fieldset>
