<?php

/*** error reporting on ***/
error_reporting(E_ALL);

// Load basic classes

/*** include the controller class ***/
require_once __SITE_PATH . 'Controller.class.php';

/*** include the registry class ***/
require_once __SITE_PATH . 'Registry.class.php';

/*** include the router class ***/
require_once __SITE_PATH . 'Router.class.php';

/*** include the template class ***/
require_once __SITE_PATH . 'Template.class.php';

/*** auto load model classes ***/
function __autoload($class_name) {
    $filename = $class_name . '.class.php';
    $file = __SITE_PATH . '/models/' . $filename;

    if (file_exists($file) == false)
    {
        return false;
    }
  require_once $file;
}



