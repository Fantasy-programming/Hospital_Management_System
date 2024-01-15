<?php

namespace Core;

class Response
{
    public const NOT_FOUND = [
        "code" => 404,
        "message" => "Page Not Found",
    ];
    public const FORBIDDEN = [
        "code" => 403,
        "message" => "Forbidden",
    ];
}
