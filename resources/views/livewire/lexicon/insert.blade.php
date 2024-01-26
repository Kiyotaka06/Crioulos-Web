<div class="border rounded m-2 p-2">
    Inserir Lexicon
    <input type="text" wire:model="word">
    <button class="bg-green-700 rounded p-4 text-white" wire:click="store()">Inserir</button>
    @error('word')
        <p class="text-red-600 text-sm">A palavra já existe na BD.</p>
    @enderror

    @if (session()->has('message'))
        <p class="text-green-600 text-sm">
            {{ session('message') }}
        </p>
    @endif
</div>
