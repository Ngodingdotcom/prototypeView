<?php
    spl_autoload_register('AutoLoader');

    function AutoLoader($class)
    {
        $path = "classes/";
        $extension = ".class.php";
        $fullpath = $path . $class . $extension;

        include_once $fullpath;

        if(!file_exists($fullpath))
        {
            return false;
        }
    }
?>