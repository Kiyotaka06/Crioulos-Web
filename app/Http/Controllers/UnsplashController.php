<?php

namespace App\Http\Controllers;

use App\Livewire\RandomPhotoComponent;

class UnsplashController extends Controller
{
    public function showPhoto()
    {
        return view('unsplash', [
            'image_url' => null,
            'alt_description' => null,
        ]);
    }
}
