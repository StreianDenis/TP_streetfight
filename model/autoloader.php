<?php
class Auto
{
    static function register()
    {
        
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($className)
    {
        
        include "model/" . $className . ".php";
    }
}
