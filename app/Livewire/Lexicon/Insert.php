<?php

namespace App\Livewire\Lexicon;

use App\Models\Word;
use Livewire\Component;

class Insert extends Component
{
    public $text = '';
    public $language_code;
    public $pattern = '/[!@#$%^&*(),.?":{}|<>º\]]/';
    

    public function render()
    {
        return view('livewire.lexicon.insert');
    }

    public function updated($field)
    {

        if ($field === 'text') {
            $this->text = trim($this->text);
        }

        $this->validateOnly($field, [
            'text' => 'required|unique:words,text,NULL,id,language_code,' . $this->language_code,
            'language_code' => 'required|unique:words,language_code,NULL,id,text,' . $this->text,
        ]);

        //$this->validateOnly($field, [
        //    'text' => function ($attribute, $value, $fail) {
        //        $text = explode(' ', $value);
        //        if (count($text) > 1) {
        //            $fail('Apenas uma palavra é permitida.');
        //        }
        //    },
        //]);
    }

    public function submit()
    {
        $this->validate([
            'text' => [
                'required',
                'unique:words,text,NULL,id,language_code,' . $this->language_code,
                function ($attribute, $value, $fail) {
                    $words = explode(' ', $value);
                    if (count($words) > 1) {
                        $fail('Apenas uma palavra é permitida.');
                    }
                    foreach ($words as $word) {
                        if(preg_match($this->pattern, $word)){
                            $fail('Não é permitido carácteres especiais.');
                        }
                    }
                },
            ],

            'language_code' => 'required|unique:words,language_code,NULL,id,text,' . trim($this->text)
        ],[
            'text.required' => 'É necessário escrever uma palavra.',
            'language_code.required' => 'É necessário selecionar a linguagem da palavra.',
            'text.unique' => 'A palavra "'. trim($this->text) . '" com o código de linguagem "'. $this->language_code .'" já existe.',
            'language_code.unique' => ''
        ]);

        $trimmedText = trim($this->text);

        $wordExists = Word::where('text', $trimmedText)
            ->where('language_code', $this->language_code)
            ->exists();

        if (!$wordExists) {
            Word::create([
                'text' => $trimmedText,
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
