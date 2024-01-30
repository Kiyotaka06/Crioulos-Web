<?php

namespace App\Livewire\Lexicon;

use App\Models\Word;
use Livewire\Component;

class Insert extends Component
{
    public $word;
    public $language_codes = ['pov', 'por'];

    protected $rules = [
        'word' => 'required|unique:words,text',
        'language' => 'required|unique:words,language_codes'        
    ];

    public function render()
    {        
        return view('livewire.lexicon.insert');
    }

    public function store() {

        $this->validate();

        Word::create([
            'text' => strtolower($this->word),
            'language_code' => ($this->language_codes),
        ]);

        session()->flash('message', 'Palavra inserida com sucesso.');

    }    
}
