<x-guestLayout>
    <div class="max-w-6xl m-auto">
        <h1>Total de frases: {{ $sentences->count() }}</h1>
        <div class="grid grid-cols-6 gap-3">            
            @foreach ($sentences as $sentence)
                <div class="border px-2 py-1 rounded">{{ \App\Language::flag($sentence->language_code) }} {{ $sentence->text }}</div>
            @endforeach
        </div>
        {{ $sentences->links() }}
    </div>
</x-guestLayout>