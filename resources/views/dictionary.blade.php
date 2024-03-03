<x-guestLayout>
    <div class="flex justify-center my-4">
        <div class="flex flex-col mx-auto space-y-6 text-center">
            <h1 class="mb-0"><i class="uil uil-book-open mr-2"></i>Dicionário</h1>
            @if (Auth::check())
                <div>
                    <p class="">Nesta página é possível ver e adicionar palavras, frases e textos no nosso dicionário.</p>
                </div>
                <div class="flex flex-col space-y-6">
                    <div class="grid grid-cols-3 mx-6 sm:mx-auto gap-2">
                        <a href="{{ route('words') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Ver Palavras</p>
                            </x-button>
                        </a>
                        <a href="{{ route('words') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Ver Frases</p>
                            </x-button>
                        </a>
                        <a href="{{ route('words') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Ver Textos</p>
                            </x-button>
                        </a>
                    </div>
                    <div class="mx-auto">
                        <a href="{{ route('create') }}">
                            <x-button class="w-full">
                                <p class="mx-auto text-lg"><i class="uil uil-plus mr-1"></i>Adicionar</p>
                            </x-button>
                        </a>
                    </div>
                </div>
            @else
                <div>
                    <p class="">Nesta página é possível ver e adicionar palavras, frases e textos no nosso dicionário.</p>
                </div>
                <div class="flex flex-col space-y-6">
                    <div class="grid grid-cols-3 mx-6 sm:mx-auto gap-2">
                        <a href="{{ route('words') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Ver Palavras</p>
                            </x-button>
                        </a>
                        <a href="{{ route('words') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Ver Frases</p>
                            </x-button>
                        </a>
                        <a href="{{ route('words') }}">
                            <x-button class="w-full">
                                <p class="mx-auto">Ver Textos</p>
                            </x-button>
                        </a>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <p class="text-red-600 ">É necessário conta para conseguir adicionar algo ao dicionário!</p>
                        <div class="grid grid-cols-2 mx-6 sm:mx-auto gap-2">
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
                </div>
            @endif
        </div>
    </div>
</x-guestLayout>