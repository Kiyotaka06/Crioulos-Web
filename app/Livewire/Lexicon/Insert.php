<?php

namespace App\Livewire\Lexicon;

use App\Models\Word;
use Livewire\Component;

class Insert extends Component
{
    public $text;
    public $language_code;

    public function render()
    {
        return view('livewire.lexicon.insert');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'text' => 'required|unique:words,text,NULL,id,language_code,' . $this->language_code,
            'language_code' => 'required|unique:words,language_code,NULL,id,text,' . $this->text,
        ]);
    }

    public function submit()
    {
        $this->validate([
            'text' => 'required|unique:words,text,NULL,id,language_code,' . $this->language_code,
            'language_code' => 'required|unique:words,language_code,NULL,id,text,' . $this->text,
        ]);

        $wordExists = Word::where('text', $this->text)
            ->where('language_code', $this->language_code)
            ->exists();

        if (!$wordExists) {
            Word::create([
                'text' => $this->text,
                'language_code' => $this->language_code,
                'user_id' => 1,
            ]);

            session()->flash('message', 'A palavra foi inserida na BD.');

            $this->reset(['text', 'language_code']);
        } else {
            session()->flash('message', 'A palavra já existe na BD.');
        }
    }
}
