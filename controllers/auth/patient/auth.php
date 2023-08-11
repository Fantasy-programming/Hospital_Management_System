<?php
session_start();


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$query = "SELECT id, email, first_name, last_name, password, role FROM patients WHERE email = :mail LIMIT 1";
$user = $db->query($query, [
    'mail' => $_POST['email']
])->find();


// If the user exists
if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        header("Location: /patient/dashboard");
        exit();
    } else {
        // Incorrect password
        header("Location: /login?error=incorrectpassword");
        exit();
    }
} else {

    // User not found
    header("Location: /login?error=usernotfound");
    exit();
}
