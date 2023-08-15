<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorized($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("Views/{$path}.php");
}

function abort($code = 404)
{
    http_response_code($code);
    view($code);
    die();
}


// Helpers for assets

function globalcss()
{
    echo '
    <link rel="stylesheet" href="/assets/index.css">
    <link rel="stylesheet" href="/assets/modules/fontawesome6.1.1/css/all.css">
    <link rel="stylesheet" href="/assets/modules/boxicons/css/boxicons.min.css">
    <script src="/assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js" defer></script>

    ';
}

function loadcss($name)
{
    echo '<link rel="stylesheet" href="/assets/css/' . $name . '.css">';
}

function loadjs($name)
{
    echo '<script type="module" src="/assets/js/' . $name . '.js" defer></script>';
}
