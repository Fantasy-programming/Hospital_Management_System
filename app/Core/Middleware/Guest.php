<?php

namespace Core\Middleware;

class Guest
{
    public function handle(): void
    {
        if ($_SESSION['user_id'] ?? false) {

            header('Location: /');
            exit;
        }
    }
}
