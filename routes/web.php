<?php

use App\Import;
use App\Models\Word;
use App\Models\Sentence;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnsplashController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {

    Route::get('/unsplash', [UnsplashController::class, 'showPhoto'
    ])->name('unsplash');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/translation', function () {
    return view('translation');
})->name('translation');

Route::get('/history/origins', function () {
    return view('history.origins');
})->name('history-origins');

Route::get('/history/notion', function () {
    return view('history.notion');
})->name('history-notion');

Route::get('/history/types', function () {
    return view('history.types');
})->name('history-types');

Route::get('/credits', function () {
    return view('credits');
})->name('credits');

Route::get('/words', function () {
    $words = Word::paginate(100);
    return view('words.index', compact(['words']));    
})->name('words');

Route::get('/sentences', function () {
    $sentences = Sentence::paginate(100);
    return view('sentences.index', compact(['sentences']));    
})->name('sentences');

Route::get('/lexicon/create', function () {        
    return view('lexicon.create');    
})->name('create');

Route::get('/dictionary', function(){
    return view('dictionary');
})->name('dictionary');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});