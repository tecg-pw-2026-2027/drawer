<?php

use App\Models\Project;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate('required|min:3')]
    public string $name;

    #[Validate('url')]
    public ?string $link;

    public ?string $description;

    public string $id = '';

    public bool $saved = false;

    public ?Project $project = null;

    public function mount($id = '')
    {
        if ($id) {
            $this->project = Project::find($id);
            $this->id = $id;
            $this->name = $this->project->name;
            $this->link = $this->project->link;
        }
    }

    public function save()
    {
        $this->validate();
        if (!$this->project) {
            $this->project = Project::create([
                'name' => $this->name,
                'link' => $this->link,
            ]);
        } else {
            $this->project->update([
                'name' => $this->name,
                'link' => $this->link,
            ]);
        }
        $this->saved = true;
        $this->dispatch('project-saved');
    }

};
