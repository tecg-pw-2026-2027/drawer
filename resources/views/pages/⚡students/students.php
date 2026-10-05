<?php

use App\Models\Student;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    #[On('student-saved')]
    public function refresh()
    {
    }

    #[Computed]
    public function students()
    {
        return Student::orderBy('name')->get();
    }

    public function delete(Student $student)
    {
        $student->delete();
    }

    public function edit($id)
    {
        $this->dispatch('open-drawer', form: 'students.form', id: $id);
    }
};
