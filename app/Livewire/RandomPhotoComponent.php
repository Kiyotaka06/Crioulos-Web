<?php

namespace App\Livewire;

use App\Services\UnsplashService;
use Livewire\Component;


class RandomPhotoComponent extends Component
{
    public $image_url;
    public $alt_description;
    public $topic; // Define the $topic property

    public function mount()
    {
        // Initialize image URL and alt description
        $this->refreshPhoto();
    }

    public function refreshPhoto()
    {
        // Fetch random photo data from UnsplashService
        $photo = app(UnsplashService::class)->getRandomPhoto($this->topic);

        // Set image URL and alt description
        $this->image_url = $photo['image_url'];
        $this->alt_description = $photo['alt_description'];
    }

    public function render()
    {
        return view('livewire.random-photo-component');
    }
}

