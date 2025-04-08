<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete(int $id): void
    {
        Task::where('id', $id)->delete();
    }

    public function render(): View
    {
        return view('livewire.tasks.index', [
            'headers' => [
                ['key' => 'title', 'label' => 'Title'],
            ],
            'tasks' => Task::paginate(10),
        ]);
    }
}
