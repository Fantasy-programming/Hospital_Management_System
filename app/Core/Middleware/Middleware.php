<?php

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class,
    ];

    public static function resolve(string | null $key): void
    {

        if (!$key) {
            return;
        }

        $middleware = self::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("Middleware '{$key}' not found.");
        }

        (new $middleware())->handle();
    }
}
