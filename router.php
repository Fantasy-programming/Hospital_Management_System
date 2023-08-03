<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/login' => 'controllers/user.login.php',
    '/signup' => 'controllers/user.signup.php',
    '/logout' => 'controllers/logout.php',
    '/test' => 'controllers/doctor.dashboard.php'
];

function routeToController($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "Views/{$code}.php";
    die();
}


routeToController($url, $routes);
