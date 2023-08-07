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
