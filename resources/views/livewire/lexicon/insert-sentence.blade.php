<div class="mx-auto p-4">
    <form wire:submit.prevent="insert">
        <div class="text-center">
            <h2>Frase</h2>
            <input class="rounded-md" type="text" wire:model="text" placeholder="Escreva uma frase">
            @error('text')
            <p class="text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4 text-center">
            <h2>Código de linguagem</h2>
            <select class="rounded-md" name="lang_code_select" wire:model="language_code">
                <option value="">Selecione a linguagem</option>
                <option value="por">Português - por</option>
                <option value="pov">Crioulo - pov</option>
            </select>
            @error('language_code')
            <p class="text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-center space-x-2">
            <a href="{{ route('dictionary') }}">
                <button class="bg-blue-400 rounded-md p-4" type="button">Voltar</button>
            </a>
            <button class="bg-green-700 rounded-md p-4 text-white" type="submit">Adicionar</button>
        </div>
    </form>
    <div class="text-center mt-2">
        @if (session()->has('message'))
        <p class="text-green-600">
            {{ session('message') }}
        </p>
        @endif
    </div>
</div>
