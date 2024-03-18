<?php

namespace App\Http\Controllers;

use App\Services\UnsplashService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

namespace App\Http\Controllers;

use App\Services\UnsplashService;

class UnsplashController extends Controller
{
    protected $unsplashService;

    public function __construct(UnsplashService $unsplashService)
    {
        $this->unsplashService = $unsplashService;
    }

    public function showRandomPhoto()
    {
        $photo = $this->unsplashService->getRandomPhoto('kitchen');

        return view('unsplash', ['photo' => $photo]);
    }
}