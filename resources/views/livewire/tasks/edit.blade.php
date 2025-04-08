<div>
    <form wire:submit="save" class="flex flex-col gap-6">
        <x-mary-input
            wire:model="title"
            label="{{ __('Title') }}"
            type="text"
            name="title"
            required
        />

        <x-mary-textarea
            wire:model="description"
            :label="__('Description')"
            placeholder="Here ..."
            hint="Max 1000 chars"
            rows="5"
            required
        />

        <div>
            <x-mary-button type="submit">{{ __('Save') }}</x-mary-button>
        </div>
    </form>
</div>
