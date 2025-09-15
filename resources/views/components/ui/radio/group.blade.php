@props([
    'label' => '',
    'required' => false,
    'error' => '',
    'direction' => 'vertical',
    'disabled' => false,
    'variant' => 'default',
    'labelClass' => '',
    'indicator' => true,
    'name' => $attributes->whereStartsWith('wire:model')->first() ?? $attributes->whereStartsWith('x-model')->first(),
])

@php
    $componentId = $id ?? 'radio-group-' . uniqid();
    
    $labelClasses = ['text-gray-800 dark:text-gray-300 font-semibold mb-4 inline-block', $labelClass];
    
    $variantClass = [
        'space-y-2' => $direction === 'vertical',
        'flex gap-1 items-stretch' => $direction === 'horizontal',
        'bg-neutral-200 dark:bg-neutral-800 rounded-box w-fit p-1' => $variant === 'segmented',
        'p-1' => $variant === 'cards',
    ];
@endphp

<div
    x-data="{
        state: null,
        init() {
            this.$nextTick(() => {
                this.state = this.$root?._x_model?.get();
            });
            
            this.$watch('state', (value) => {
                // Sync with Alpine state
                this.$root?._x_model?.set(value);
                 
                // Sync with Livewire state
                let wireModel = this?.$root.getAttributeNames().find(n => n.startsWith('wire:model'))
                 
                if(this.$wire && wireModel){
                    let prop = this.$root.getAttribute(wireModel)
                    this.$wire.set(prop, value, wireModel?.includes('.live'));
                }
            });
            
        },
    }"
    {{ $attributes->merge(['class' => 'w-full text-start']) }}
>
    @if ($label)
        <label 
            id="{{ $componentId }}-label" 
            @class($labelClasses)
        >
            {{ $label }}
        </label>
    @endif
    
    <div 
        role="radiogroup"
        @class(Arr::toCssClasses($variantClass))
        @if ($label) 
            aria-labelledby="{{ $componentId }}-label" 
        @endif
    >
        {{ $slot }}
    </div>
    
    @if ($error && filled($error))
        <p
            class="text-gray-200 bg-red-500 relative w-fit after:content-[''] after:w-1 after:h-full after:bg-white after:absolute after:left-0 after:top-0  text-sm mt-4 px-4 py-0.5"
        >
            {{ $error }}
        </p>
    @endif
</div>