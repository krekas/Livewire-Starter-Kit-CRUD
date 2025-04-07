<div class="h-full w-full flex-1">

    <flux:button :href="route('tasks.create')" class="mb-4">
        Create
    </flux:button>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>
                        {{ $task->title }}
                    </td>
                    <td>
                        <x-link class="link-accent" :href="route('tasks.edit', $task)">Edit</x-link>
                        <x-link href="#" class="link-error" wire:click="delete({{ $task->id }})" wire:confirm="Are you sure?">Delete</x-link>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $tasks->links() }}
    </div>

</div>
