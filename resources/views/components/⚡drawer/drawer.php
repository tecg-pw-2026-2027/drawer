<?php

use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    public bool $open = false;
    public string $form = '';
    public string $id = '';

    public function close()
    {
        $this->open = false;
        $this->form = '';
        $this->id = '';
    }

    #[On('open-drawer')]
    public function open($form, $id = '')
    {
        if ($id) {
            $this->id = $id;
        }
        $this->form = $form;
        $this->open = true;
    }
};
