<div class="border rounded m-2 p-2">
    <div class="">
        Inserir Palavra
        <input type="text" wire:model="word">
    </div>
    <div class="my-4">
        <h2>Escolher código de linguagem</h2>
        <select name="lang_code_opts" id="">
        <option value="language_codes">Selecione uma opção</option>
        </select>
    </div>

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