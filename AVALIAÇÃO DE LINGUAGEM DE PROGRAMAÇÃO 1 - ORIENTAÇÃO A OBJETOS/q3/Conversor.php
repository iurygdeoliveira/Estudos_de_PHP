<?php

class Conversor
{
    function Conversor($from, $to, $tag)
    {
        echo str_replace($from, $to, $tag);
    }
}
