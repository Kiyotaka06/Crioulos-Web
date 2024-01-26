<?php

namespace App;

use App\Models\Word;
use Illuminate\Support\Facades\Storage;

class Import
{    
    public static function importWordsFromFile($filePath)
    {        
        $fileContents = file_get_contents($filePath);

        $words = str_word_count($fileContents, 1);        
        $uniqueWords = array_unique($words);
        return $uniqueWords;
    }

    public static function insertIntoDB($vector_of_words) {
        $language_codes = ['pov', 'por'];

        foreach ($vector_of_words as $word) {
            $randomInteger = rand(0, 1);            
            $randomIntegerMT = mt_rand(0, 1);

            Word::create([
                'text' => $word,
                'language_code' => $language_codes[$randomIntegerMT],
                'user_id' => 1
            ]);
        }
    }
}