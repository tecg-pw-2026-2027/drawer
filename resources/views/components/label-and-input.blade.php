@props([
    'name',
    'type' => 'text',
    'model' => '',
])

<div {{ $attributes }} class="grid">
    <label class="font-bold"
           for="{{ $name }}">{{ $slot }}</label>
    <input class="bg-white border border-gray-200 py-2 px-2 rounded-md"
           id="{{ $name }}"
           @if($model) wire:model="{{ $model }}" @endif
           @if(!$model) name="{{ $name }}" @endif
           type="{{ $type }}">
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
</div>
