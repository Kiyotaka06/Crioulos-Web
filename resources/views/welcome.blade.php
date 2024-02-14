<x-guestLayout>
    <div class="flex justify-center my-4">
        <div class="flex flex-col mx-auto space-y-6">
            <h1 class="mt-4">Languages: ISO 639-3</h1>
            <div class="flex">
                <img class="w-96 h-96" src="/logo/Light_Mode-removebg.png" alt="">
            </div>
            <div class="flex justify-center space-x-2">
                <a href="{{ route('words') }}">
                    <button class="bg-blue-400 rounded-md p-4">Todas as palavras</button>
                </a>
                <a href="{{ route('create') }}">
                    <button class="bg-blue-400 rounded-md p-4">Criar</button>
                </a>
            </div>
        </div>
    </div>
</x-guestLayout>