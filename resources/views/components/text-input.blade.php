@props([
    'label',
    'placeholder' => null,
])

<div>
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'block w-full rounded-lg border border-gray-300 bg-white text-sm text-gray-900 p-2.5 focus:border-blue-500 focus:ring-blue-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500']) }} />
</div>
