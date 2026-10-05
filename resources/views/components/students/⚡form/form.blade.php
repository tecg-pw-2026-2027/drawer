<div>
    <form action="#"
          wire:submit.prevent="save"
          class="grid gap-4">
        <x-label-and-input model="name"
                           name="name">Nom
        </x-label-and-input>
        <x-label-and-input model="email"
                           name="email"
                           type="email">Email
        </x-label-and-input>

        <button type="submit"
                class="btn">Enregistrer
            @if($saved)
                            ✅
            @endif
        </button>
    </form>
</div>