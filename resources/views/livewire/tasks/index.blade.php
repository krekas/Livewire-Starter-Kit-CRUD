<div class="h-full w-full flex-1">

    <x-mary-button :link="route('tasks.livewire.create')" class="mb-4">
        Create
    </x-mary-button>

    <div class="min-w-full align-middle">
        <x-mary-table :headers="$headers" :rows="$tasks" with-pagination>
            @scope('actions', $task)
                <div class="flex space-x-2">
                    <x-mary-button icon="o-pencil" :link="route('tasks.livewire.edit', $task)" class="btn-sm" />
                    <x-mary-button icon="o-trash" wire:click="delete({{ $task->id }})" wire:confirm="Are you sure?" spinner class="btn-sm btn-error" />
                </div>
            @endscope
        </x-mary-table>
    </div>

</div>
