<?php
// start session
session_start();

// config file
require_once 'config.php';

// include helper
include_once 'helpers/system_helper.php';

// autoloader
function autoloader($class_name): void
{
    require_once("lib/" . $class_name . ".php");
}

spl_autoload_register('autoloader');