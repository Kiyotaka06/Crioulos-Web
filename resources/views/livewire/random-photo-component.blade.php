<div>
    <div class="max-w-6xl mx-auto">
        <p class="text-center text-4xl font-bold my-8">Foto aleatória</p>
        <p class="my-5 mx-4 text-center">Aqui pode encontrar uma imagem aleatória, onde pode escrever em baixo da mesma o que está representado.</p>
        <div class="flex flex-col justify-center mb-5 items-center">
            <img src="{{ $image_url }}" alt="{{ $alt_description }}" class="w-64 rounded-lg">
            <p class="mt-4">{{ $alt_description }}</p>
        </div>
    </div>
    
    <select wire:model="topic" class="block w-full p-2 border border-gray-300 rounded-md">
        <option value="">Select a topic</option>
        <option value="nature">Nature</option>
        <option value="animals">Animals</option>
    </select>

    <button wire:click="refreshPhoto" class="mt-2 p-2 bg-blue-500 text-white rounded-md">Refresh Photo</button>
</div>