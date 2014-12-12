<?php

class debug_helper 
{
    public static function dump($arg = null)
    {
        echo '<pre>';
        var_dump($arg);
        echo '</pre>';
    }
}
