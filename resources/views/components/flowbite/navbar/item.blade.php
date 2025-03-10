@props([
    'href',
    'icon',
    'active' => false,
])

<li>
    <a href="{{ $href }}"
       @class([
            'flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group',
            'bg-gray-100 dark:hover:bg-gray-700' => $active,
        ])>
        <x-dynamic-component component="flowbite.icons.{{ $icon }}" />
        <span class="ml-3">{{ $slot }}</span>
    </a>
</li>
