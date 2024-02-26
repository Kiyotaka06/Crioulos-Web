<?php

namespace App\Livewire\Lexicon;

use App\Models\Sentence;
use Livewire\Component;

class InsertSentence extends Component
{
    public $text = '';
    public $language_code;
    public $pattern = '/[@#$%^&*+`´¹£§½¬~«»_;()":{}|<>º\]]/';

    public function render()
    {
        return view('livewire.lexicon.insert-sentence');
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
    }

    public function insert(){
        $this->validate([
            'text' => [
                'required',
                'unique:words,text,NULL,id,language_code,' . $this->language_code,
                function ($attribute, $value, $fail) {
                    $sentences = explode('.', $value);
                    if (count($sentences) > 1) {
                        $fail('Apenas uma frase é permitida.');
                    }
                    foreach ($sentences as $sentence) {
                        if (preg_match($this->pattern, $sentence)) {
                            $fail('Não é permitido carácteres especiais.');
                        }
                    }
                },
            ],
            'language_code' => 'required|unique:words,language_code,NULL,id,text,' . $this->text
        ],[
            'text.required' => 'É necessário escrever uma palavra.',
            'language_code.required' => 'É necessário selecionar a linguagem da frase.',
            'text.unique' => 'Esta frase já existe com o código de linguagem "' . $this->language_code . '".',
            'language_code.unique' => ''
        ]);

        $sentenceExists = Sentence::where('text', $this->text)
            ->where('language_code', $this->language_code)
            ->exists();

        if (!$sentenceExists) {
            Sentence::create([
                'text' => strtolower($this->text),
                'language_code' => $this->language_code,
                'user_id' => 1,
            ]);
            
            session()->flash('message', 'A frase foi inserida na BD.');

            $this->reset(['text', 'language_code']);
        }
    }
}
