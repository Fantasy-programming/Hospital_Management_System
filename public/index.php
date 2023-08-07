<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

$router = new Core\Router();
$routes = require base_path('routes.php');
$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($url, $method);




// Connect to mysql database & execute a query

// $config = require('config.php');
// $db = new Database($config['database']);
// $id = $_GET['id'] ?? 1;
// $query = "select * from patients where id = ?";
// $patients = $db->query($query, [$id])->fetchAll();
