<?php 

namespace App\Helpers;

class ArrayHelper{

    public static function inArray($needle, $haystack, $strict = false) : bool
    {
        return in_array($needle, $haystack, $strict);
    }

    public static function notInArray($needle, array $haystack, bool $strict = false): bool
    {
        return !self::inArray($needle, $haystack, $strict);
    }

    public static function isEmpty($array): bool
    {
        return empty($array);
    }

    public static function trimLower(array $array)
    {
        return array_map(function ($item) {
            return strtolower(trim($item));
        }, $array);
    }
}