<?php

if (!isset($_ENV['APP_ENV'])) {
    $_ENV['APP_ENV'] = 'development';
}

if ($_ENV['APP_ENV'] === 'production') {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);

    $dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
    $dotenv->load();
} else {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH, '.env.local');
    $dotenv->load();
}

return [
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'] ?? null,
        'dbname' => $_ENV['DB_NAME'],
        "password" => $_ENV['DB_PASSWORD'] ?? "",
        "username" => $_ENV['DB_USERNAME'],
        "ssl" => $_ENV['DB_SSL_ATTR'],
        'charset' => 'utf8mb4',
    ],

];
