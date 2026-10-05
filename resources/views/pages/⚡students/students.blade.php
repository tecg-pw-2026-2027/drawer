<div>
    @if($this->students->isNotEmpty())
        <ol class="grid gap-4 mb-8">
            @foreach($this->students as $student)
                <li class="flex leading-12 gap-1 border-b border-b-gray-200"
                    wire:key="{{ $student->id }}">
                    <span class="font-bold">{{ $student->name }}</span> -
                    <span class="italic">{{ $student->email }}</span>
                    <button wire:click="delete('{{ $student->id }}')"
                            class="cursor-pointer">🗑️
                    </button>
                    <button @click="$dispatch('open-drawer',{
                        form:'students.form',
                        id:'{{ $student->id }}'
                        })"
                            class="cursor-pointer">📝️
                    </button>
                </li>
            @endforeach
        </ol>
    @else
        <p class="mb-4">Il n'y pas encore d’étudiant</p>
    @endif

    <button @click="$dispatch('open-drawer',{
        form:'students.form'
        })"
            class="btn">Ajouter un étudiant
    </button>

</div>