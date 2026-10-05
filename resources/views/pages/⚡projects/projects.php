<?php

use App\Models\Project;
use App\Models\Student;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    #[On('project-saved')]
    public function refresh()
    {
    }

    #[Computed]
    public function projects()
    {
        return Project::orderBy('name')->get();
    }

    public function delete(Project $project)
    {
        $project->delete();
    }

    public function edit($id)
    {
        $this->dispatch('open-drawer', form: 'projects.form', id: $id);
    }
};
