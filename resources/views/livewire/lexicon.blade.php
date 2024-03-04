<div class="border flex flex-col justify-center space-y-4 rounded-md m-4 p-4">
    <div class="grid grid-cols-2 gap-2 mx-auto">
        <x-button wire:click="showWordComponent">
            <p class="mx-auto">Adicionar Palavras</p>
        </x-button>
        <x-button wire:click="showSentenceComponent">
            <p class="mx-auto">Adicionar frases</p>
        </x-button>
    </div>
    <div>
        @if($showWord)
            <livewire:lexicon.insert-word />
        @elseif($showSentence)
            <livewire:lexicon.insert-sentence />
        @endif
    </div>
</div>