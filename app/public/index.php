<?php

session_start();

// Essential functions
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . 'Core/functions.php';


// Bootstrap
require base_path('bootstrap.php');

// Setup router
$router = new Core\Router();
$routes = require base_path('routes.php');

// Parse requests
$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($url, $method);
