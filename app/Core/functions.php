<?php

namespace Core;

use Core\Response;

/**
 * Dump and die function for debugging purposes.
 *
 * @param mixed $value The value to be dumped.
 * @return void
 */
function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}


/**
 * Checks if the current URL matches the given URL.
 *
 * @param string $url The URL to compare against the current URL.
 * @return bool Returns true if the current URL matches the given URL, false otherwise.
 */
function urlIs(string $url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}


/**
 * Checks if the given condition is true, otherwise aborts the request with the given status code.
 *
 * @param bool $condition The condition to check.
 * @param array $status The HTTP response status code and message to send if the condition is false.
 * @return void
 */
function authorized(bool $condition, array $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path(string $path = '')
{
    return rtrim(realpath(BASE_PATH . $path), '/');
}

function view(string $path, array $attributes = [])
{
    extract($attributes);
    require base_path("Views/{$path}.php");
}

function abort(array $code = Response::NOT_FOUND)
{
    http_response_code($code['code']);
    view('error', [
        'code' => $code['code'],
        'message' => $code['message']
    ]);
    die();
}


// Helpers for assets

function globalcss()
{
    echo '
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    ';
}

function loadcss(string $name, string $type = 'custom')
{
    if ($type === 'custom') {
        echo '<link rel="stylesheet" href="/assets/css/' . $name . '.css">';
    } else {
        echo '<link rel="stylesheet" href="/assets/modules/' . $name . '.css">';
    }
}


function loadjs(string $name, string $type = 'custom'): void
{
    if ($type === 'custom') {
        echo '<script src="/assets/js/' . $name . '.js" defer></script>';
    } else {
        echo '<script src="/assets/modules/' . $name . '.js" defer></script>';
    }
}
