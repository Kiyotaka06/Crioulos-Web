<div class="border rounded m-2 p-2">
    <div class="">
        Inserir Palavra
        <input type="text" wire:model="text">
        @error('text')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div class="my-4">
        <h2>Escolher código de linguagem</h2>
        <select name="lang_code_select" wire:model="language_code">
            <option value="">Selecione uma opção</option>
            <option value="por">Português - por</option>
            <option value="pov">Crioulo - pov</option>
        </select>
        @error('language_code')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <button class="bg-green-700 rounded p-4 text-white" type="submit" wire:click.prevent="submit">Inserir</button>

    @if (session()->has('message_error'))
    <p class="text-red-600 text-sm">
        {{ session('message_error') }}
    </p>
    @endif
    @if (session()->has('message'))
    <p class="text-green-600 text-sm">
        {{ session('message') }}
    </p>
    @endif
</div>
<!-- Display Livewire validation errors -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif