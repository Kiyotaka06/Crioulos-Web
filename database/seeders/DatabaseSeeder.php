<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Import;
use App\Models\User;
use App\Models\Word;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'David Freitas',
            'email' => 'dvdfreitas@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Word::create([
            'text' => 'hello',
            'language_code' => 'en',
            'user_id' => 1,
        ]);

        Word::create([
            'text' => 'world',
            'language_code' => 'en',
            'user_id' => 1,
        ]);

        Word::create([
            'text' => 'hola',
            'language_code' => 'es',
            'user_id' => 1,
        ]);

        //$unique_words = Import::importWordsFromFile('./csv/palavras.txt');
        //Import::insertIntoDB($unique_words);

        // DB::table('user_word')->insert([
        //     'user_id' => 1,
        //     'word_id' => 1,
        // ]);

        // DB::table('user_word')->insert([
        //     'user_id' => 1,
        //     'word_id' => 2,
        // ]);
    }
}
