<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    #[Validate('required|string')]
    public string $title = '';

    #[Validate('required|string')]
    public string $description = '';

    public Task $task;

    public function mount(Task $task): void
    {
        $this->task = $task;
        $this->title = $task->title;
        $this->description = $task->description;
    }

    public function save(): void
    {
        $data = $this->validate();

        $this->task->update($data);

        $this->redirectRoute('tasks.livewire.index');
    }

    public function render(): View
    {
        return view('livewire.tasks.edit');
    }
}
