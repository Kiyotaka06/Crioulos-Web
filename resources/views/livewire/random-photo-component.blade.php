<div class="max-w-6xl mx-auto">
    <p class="text-center text-4xl font-bold my-8">Foto aleatória</p>
    <p class="my-5 mx-4 text-center">Aqui pode encontrar uma imagem aleatória, onde pode escrever em baixo da mesma o que está representado.</p>
    <div class="flex flex-col w-1/2 mx-auto gap-4 mb-8">
        <p class="text-center text-xl font-bold">Selecione um tópico</p>
        <div class="flex gap-4">
            <select wire:model="topic" class="block w-full p-2 border border-gray-300 rounded-md hover:cursor-pointer">
                <option value="nature">Natureza</option>
                <option value="cars">Carros</option>
                <option value="animals">Animais</option>
            </select>
            <x-button wire:click="refreshPhoto">Atualizar Imagem</x-button>
        </div>
    </div>

    <div class="flex flex-col justify-center mb-5 items-center">
        <img src="{{ $image_url }}" alt="{{ $alt_description }}" class="h-96 rounded-lg">
        <div class="flex flex-col items-center justify-center w-1/2 mx-auto mt-4">
            <div class="flex items-center justify-center mt-2 gap-2">
                <x-checkbox type="checkbox" wire:click="toggleAltDescription" />
                <label>Mostrar descrição</label>
            </div>
            @if($showAltDescription)
            <p class="mt-4">Descrição: {{ $alt_description }}</p>
            @endif
        </div>

    </div>


</div>