<x-guestLayout>
    <div class="max-w-6xl mx-auto">
        <p class="text-center text-4xl font-bold my-8">Foto aleatória</p>
        <p class="my-5 mx-4 text-center">Aqui pode encontrar uma imagem aleatória, onde pode escrever em baixo da mesma o que está representado.</p>
        <div class="flex flex-col justify-center mb-5 items-center">
            <img src="{{ $photo['image_url'] }}" alt="{{ $photo['alt_description'] }}" class="w-64 h-54 rounded-lg">
            <p>{{ $photo['alt_description'] }}</p>
        </div>
    </div>
</x-guestLayout>