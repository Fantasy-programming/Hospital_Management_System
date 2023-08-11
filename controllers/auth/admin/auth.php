<?php
session_start();

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "SELECT id, username, password, role FROM staff WHERE username = :username AND role = :role LIMIT 1";
$params = [
    'username' => $_POST['userName'],
    'role' => $_POST['role']
];

$user = $db->query($query, $params)->find();

// If the user exists
if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        header("Location: /admin/dashboard");
        exit();
    } else {
        // Incorrect password
        header("Location: /admin?error=incorrectpassword");
        exit();
    }
} else {

    // User not found
    header("Location: /admin?error=usernotfound");
    exit();
}
