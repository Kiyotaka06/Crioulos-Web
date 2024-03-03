<x-guestLayout>
    <div class="max-w-6xl m-auto">
        <h1>Language code: {{ $language_code }}</h1>
        <h1>Total de palavras: {{ $words->count() }}</h1>
        <div class="grid grid-cols-6 gap-3">            
            @foreach ($words as $word)
                <div class="border px-2 py-1 rounded">{{ \App\Language::flag($language_code) }} {{ $word->text }}</div>
            @endforeach
        </div>
        {{ $words->links() }}
    </div>
</x-guestLayout>    