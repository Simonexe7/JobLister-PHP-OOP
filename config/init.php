<?php
require_once 'config.php';

// autoloader
function autoloader($class_name) : void
{
    require_once("lib/".$class_name.".php");
}

spl_autoload_register('autoloader');