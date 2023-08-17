<?php
const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    $class = ltrim($class, '\\');
    $classParts = explode('\\', $class);
    $className = array_pop($classParts);
    $namespace = implode(DIRECTORY_SEPARATOR, $classParts);
    $filePath = base_path($namespace . DIRECTORY_SEPARATOR . "{$className}.php");

    if (file_exists($filePath)) {
        require $filePath;
    }
});

require base_path('bootstrap.php');

$router = new Core\Router();
$routes = require base_path('routes.php');
$url = parse_url($_SERVER['REQUEST_URI'])['path'];


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($url, $method);
