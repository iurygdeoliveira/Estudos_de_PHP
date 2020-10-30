<?php
class Conversor
{
    function Conversor($from, $to, $string)
    {
        if (ctype_alpha($from) && strlen($from) >= 1 && strlen($from) <= 10 && $to >= 1 && $to <= 1000 && strlen($string) <= 50 && strlen($string) >= 1) {
            echo preg_replace("/(?<=<|<\/)({$from})+(?=[^>]*>)/i", $to, $string);
            echo "\n";
        }
    }
}
