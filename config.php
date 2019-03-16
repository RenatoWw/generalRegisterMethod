<?php

spl_autoload_register(function($nameClass){
    $directoryClass = "registerClasses";
    $fileName = $directoryClass . DIRECTORY_SEPARATOR . $nameClass.".php";

    if(file_exists($fileName)){
        require_once($fileName);
    }
});
