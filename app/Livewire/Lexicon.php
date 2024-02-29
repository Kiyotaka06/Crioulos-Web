<?php

namespace App\Livewire;

use Livewire\Component;

class Lexicon extends Component
{
    public $showWord = true;
    public $showSentence = true;


    public function render()
    {
        return view('livewire.lexicon');
    }

    public function showWordComponent()
    {
        $this->showWord = true;
        $this->showSentence = false;
    }

    public function showSentenceComponent()
    {
        $this->showWord = false;
        $this->showSentence = true;
    }
}
