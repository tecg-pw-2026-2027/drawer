<?php

use App\Models\Student;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate('required|min:3')]
    public string $name;

    public string $email;

    public string $id = '';

    public bool $saved = false;

    public ?Student $student = null;

    public function rules()
    {
        return [
            'email' => [
                'required',
                'email',
                Rule::unique('students')->ignore($this->student?->id)
            ],
        ];
    }

    public function mount($id = '')
    {
        if ($id) {
            $this->student = Student::find($id);
            $this->id = $id;
            $this->name = $this->student->name;
            $this->email = $this->student->email;
        }
    }

    public function save()
    {
        $this->validate();
        if (!$this->student) {
            $this->student = Student::create([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        } else {
            $this->student->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        }
        $this->saved = true;
        $this->dispatch('student-saved');
    }

};
