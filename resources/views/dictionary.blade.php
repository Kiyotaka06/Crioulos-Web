<x-guestLayout>
    <div class="max-w-2xl flex flex-col mx-auto bg-white border drop-shadow-md rounded-md py-10 space-y-6 my-8 text-center">
        <h1 class="mb-0"><i class="uil uil-book-open mr-2"></i>Dicionário</h1>
        <p class="">Nesta página é possível ver e adicionar palavras, frases e textos no nosso dicionário.</p>
        <div class="flex flex-col space-y-4">
            <div class="grid grid-rows-2 sm:grid-cols-2 sm:grid-rows-none mx-auto gap-2">
                <a href="{{ route('words') }}">
                    <x-button class="w-full">
                        <p class="mx-auto">Ver Palavras</p>
                    </x-button>
                </a>
                <a href="{{ route('sentences') }}">
                    <x-button class="w-full">
                        <p class="mx-auto">Ver Frases</p>
                    </x-button>
                </a>
                <!-- <a href="{{ route('sentences') }}">
                    <x-button class="w-full">
                        <p class="mx-auto">Ver Textos</p>
                    </x-button>
                </a> -->
            </div>
            @if (Auth::check())
                <div class="mx-auto">
                    <a href="{{ route('create') }}">
                        <x-button class="w-full">
                            <p class="mx-auto text-lg"><i class="uil uil-plus mr-1"></i>Adicionar</p>
                        </x-button>
                    </a>
                </div>
            @else
                <div class="flex flex-col space-y-1">
                    <p class="text-red-600 ">É necessário ter uma conta para conseguir adicionar algo ao dicionário!</p>
                    <div class="grid grid-cols-2 mx-auto gap-2">
                        <a href="{{ route('login') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Iniciar Sessão</p>
                            </x-button>
                        </a>
                        <a href="{{ route('register') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Criar Conta</p>
                            </x-button>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-guestLayout>