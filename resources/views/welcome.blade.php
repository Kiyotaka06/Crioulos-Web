<x-guestLayout>
    <div class="mx-auto">
        <h1>Languages: ISO 639-3</h1>
        <a href="{{ route('words') }}">
            <button class="bg-blue-400 rounded-md p-2">Todas as palvras</button>
        </a>
        <a href="{{ route('create') }}">
            <button class="bg-blue-400 rounded-md p-2">Criar</button>
        </a>
    </div>
</x-guestLayout>