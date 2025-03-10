<x-flowbite.app>
    <div class="min-w-full align-middle">
        <table class="min-w-full divide-y divide-gray-200 border">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                </th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                @foreach($tasks as $task)
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                            {{ $task->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                            <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                            <button>Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $tasks->links() }}
    </div>
</x-flowbite.app>
