<div>
    @if($this->projects->isNotEmpty())
        <ol class="grid gap-4 mb-8">
            @foreach($this->projects as $project)
                <li class="flex leading-12 gap-1 border-b border-b-gray-200"
                    wire:key="{{ $project->id }}">
                    <span class="font-bold">{{ $project->name }}</span> -
                    <span class="italic">{{ $project->link }}</span>
                    <button wire:click="delete('{{ $project->id }}')"
                            class="cursor-pointer">🗑️
                    </button>
                    <button @click="$dispatch('open-drawer',{
                        form:'projects.form',
                        id:'{{ $project->id }}'
                    })"
                            class="cursor-pointer">📝️
                    </button>
                </li>
            @endforeach
        </ol>
    @endif

    <button @click="$dispatch('open-drawer',{form:'projects.form'})"
            class="btn">Ajouter un projet
    </button>

</div>