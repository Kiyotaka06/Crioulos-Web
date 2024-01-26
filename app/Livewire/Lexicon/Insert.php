<?php

namespace App\Livewire\Lexicon;

use App\Models\Word;
use Livewire\Component;

class Insert extends Component
{
    public $word;

    protected $rules = [
        'word' => 'required|unique:words,text',        
    ];

    public function render()
    {        
        return view('livewire.lexicon.insert');
    }

    public function store() {

        $this->validate();

        Word::create([
            'text' => strtolower($this->word),
            'language_code' => 'por'
        ]);

        session()->flash('message', 'Palavra inserida com sucesso.');

    }    
}
