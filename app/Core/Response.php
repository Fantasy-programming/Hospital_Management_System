<?php

namespace Core;

class Response
{
    const NOT_FOUND = [
        "code" => 404,
        "message" => "Page Not Found"
    ];
    const FORBIDDEN = [
        "code" => 403,
        "message" => "Forbidden"
    ];
}
