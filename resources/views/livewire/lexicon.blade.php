<div class="border flex justify-center space-y-4 rounded-md m-4 p-4">
    <div>
        <x-button wire:click="showWordComponent">Inserir Palavras</x-button>
        <x-button wire:click="showSentenceComponent">Inserir frases</x-button>

        @if($showWord)
        <livewire:lexicon.insert-word />
        @elseif($showSentence)
        <livewire:lexicon.insert-sentence />
        @endif
    </div>
</div>