<?php 

namespace App\Helpers;
use Illuminate\Support\Str;

class StringHelper{

    public static function upper($string)
    {
        return strtoupper($string);
    }

    public static function lower($string)
    {
        return strtolower($string);
    }

    public static function readMore($string, $start)
    {
        return Str::limit($string, $start, $end='....');
    }

    
}
