<?php 

namespace App\Helpers;

class StringHelper{

    public static function upper($string)
    {
        return strtoupper($string);
    }

    public static function lower($string)
    {
        return strtolower($string);
    }

    public static function readMore($string, $start, $end)
    {
        $string = strip_tags($string);
        if (strlen($string) > $end) {
            // truncate string
            $stringCut = substr($string, $start, $end);
            $endPoint = strrpos($stringCut, ' ');
            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '... <a href="/this/story">Read More</a>';
        }
        return $string;
    }


}
