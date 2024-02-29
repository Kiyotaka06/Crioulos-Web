<x-guestLayout>
    <div class="flex justify-center my-4">
        <div class="flex flex-col mx-auto space-y-6">
            <div class="flex">
                <h1>Tradução</h1>
            </div>
            <div class="flex justify-center space-x-2">
                <a href="{{ route('words') }}">
                    <x-button>Todas as palavras</x-button>
                </a>
                <a href="{{ route('create') }}">
                    <x-button>Criar</x-button>
                </a>
            </div>
        </div>
    </div>
</x-guestLayout>