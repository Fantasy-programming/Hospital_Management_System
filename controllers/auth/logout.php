<?php

namespace Controllers\auth;

class Logout extends \Core\Controller
{

    public function logoutAction()
    {
        // Start the session
        session_start();

        // Unset all session variables
        $_SESSION = array();

        // Destroy the session 
        session_destroy();

        // Redirect back to the login page
        header("Location: /");
        exit();
    }
}
