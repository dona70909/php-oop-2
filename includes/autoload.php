<?php  

    spl_autoload_register('myLoader');
    
    function myLoader($className) {

        $path = "classes/";
        $extension = ".php";
        $fullPath = $path . $className . $extension;

        include_once $fullPath;
    }
?>