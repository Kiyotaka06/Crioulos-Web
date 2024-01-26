<?php

namespace App;

class Language
{    
    public static function flag($language_code) {
        if ($language_code == 'por')
            return '🇵🇹';
        elseif ($language_code == 'pov') 
            return '🇬🇼'; 
    }
}