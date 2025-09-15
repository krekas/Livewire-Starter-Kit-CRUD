@php
    $indicatorClasses = [
        'relative',
        'shrink-0 size-[1.125rem] rounded-full text-sm shadow-xs bg-white dark:bg-white/5',
        "after:content-[''] after:absolute after:size-[.5rem] after:rounded-full after:top-1/2 after:left-1/2 after:-translate-1/2 dark:after:bg-black after:bg-white after:hidden",
        'border border-gray-300 dark:border-white/10',
        
    ];
@endphp

<div @class($indicatorClasses) data-slot="radio-item-indicator"></div>
