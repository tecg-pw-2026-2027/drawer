<div>
    <div x-show="$wire.open"
         class="fixed top-0 bottom-0 left-0 right-0 bg-gray-800 opacity-30"></div>

    <div class="drawer"
         x-show="$wire.open"
         x-transition
         @click.outside="$wire.close()"
         @keyup.escape.window="$wire.close()">
        <button @click="$wire.close()"
                class="cursor-pointer block text-right w-full px-2">❌
        </button>
        @if($form)
            <livewire:dynamic-component :is="$form"
                                        :id="$id" />
        @endif

    </div>
</div>