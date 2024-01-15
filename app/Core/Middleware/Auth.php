<?php

namespace Core\Middleware;

class Auth
{
    public function handle(): void
    {
        if (!$_SESSION['user_id'] ?? false) {
            header('Location: /login');
            exit;
        }
    }
}
