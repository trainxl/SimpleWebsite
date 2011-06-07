<?php

// Define the site path constant
$site_path = realpath(dirname(__FILE__)) . '/../';
define ('__SITE_PATH', $site_path);

$installPath = '';
define('__INSTALL_PATH', $installPath);


$host = $_SERVER['HTTP_HOST'] . __INSTALL_PATH;
define('__HOST', $host);

// Application related values
require_once __SITE_PATH . 'config/core.php';

// Project related values
require_once __SITE_PATH . 'config/config.php';

// If a database is involved, load the credentials and connect
require_once __SITE_PATH . 'config/database.php';

// Load the navigation array
require_once __SITE_PATH . 'config/navigation.php';


// A new registry object
$registry = new Registry();

// Register the navigation
$registry->navigation = $navigation;

// Load the Router
$registry->router = new Router($registry);

// Set the path to the controllers directory
$registry->router->setPath (__SITE_PATH . 'controllers');

// Load up the template
$registry->template = new Template($registry);

// Load the right Controller
$registry->router->loader();