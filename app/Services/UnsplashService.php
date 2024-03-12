<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

class UnsplashService
{
    protected $httpClient;
    protected $accessKey;

    public function __construct()
    {
        $this->httpClient = new Client();
        $this->accessKey = Config::get('services.unsplash.access_key');
    }

    public function getRandomPhoto()
    {
        try {
            $response = $this->httpClient->get("https://api.unsplash.com/photos/random?client_id=uaVFE1OHCiRZEt0pSwr6owb6uUJwoqfya3ug09T8taw");
            $photoData = json_decode($response->getBody(), true);
    
            // Extract the regular image URL
            $imageUrl = $photoData['urls']['regular'];
    
            return [
                'id' => $photoData['id'],
                'alt_description' => $photoData['alt_description'],
                'image_url' => $imageUrl,
            ];
        } catch (\Exception $e) {
            // Handle errors
            throw new \Exception('Failed to fetch a random Unsplash photo: ' . $e->getMessage());
        }
    }
}
