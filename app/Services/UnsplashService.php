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

    public function getRandomPhoto($topic = null)
    {
        try {
            $url = "https://api.unsplash.com/photos/random?client_id=$this->accessKey";
            
            if ($topic) {
                $url .= "&query=$topic";
            }

            $response = $this->httpClient->get($url);
            $photoData = json_decode($response->getBody(), true);
    
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
