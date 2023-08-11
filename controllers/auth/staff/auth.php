<?php

session_start();

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$query = "SELECT id, username, password, role FROM staff WHERE username = :user AND role = :role LIMIT 1";
$params = [
    'user' => $_POST['userName'],
    'role' => $_POST['role']
];

$user = $db->query($query, $params)->find();


if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        switch ($user['role']) {
            case 'Doctor':
                header("Location: /doctor/dashboard");
                exit();
            case 'Nurse':
                header("Location: /nurse/dashboard");
                exit();
            case 'Accountant':
                header("Location: /accountant/dashboard");
                exit();
            case 'Pharmacist':
                header("Location: /pharmacist/dashboard");
                exit();
            case 'Laboratorist':
                header("Location: /lab/dashboard");
                exit();
            default:
                // Unknown role, redirect back to the login page with an error message
                header("Location: /staff/login?error=unknownrole");
                exit();
        }
    } else {
        // Incorrect password, redirect back to the login page with an error message
        header("Location: /staff/login?error=incorrectpassword");
        exit();
    }
} else {
    // User not found, redirect back to the login page with an error message
    header("Location: /staff/login?error=usernotfound");
    exit();
}
