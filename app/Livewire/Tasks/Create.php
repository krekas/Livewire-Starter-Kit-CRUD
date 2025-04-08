<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required|string|min:3')]
    public string $title = '';

    #[Validate('required|string|min:3')]
    public string $description = '';

    public function save(): void
    {
        $data = $this->validate();

        Task::create($data);

        $this->redirectRoute('tasks.livewire.index');
    }

    public function render(): View
    {
        return view('livewire.tasks.create');
    }
}
