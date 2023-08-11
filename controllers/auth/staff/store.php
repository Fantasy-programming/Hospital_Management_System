<?php


use Core\App;
use Core\Database;
use Core\Validator;

// Perform form validation
$errors = array();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$userName = $_POST['userName'];
$age = $_POST['age'];
$role = $_POST['role'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];




if (empty(trim($firstName)) || empty(trim($lastName)) | empty(trim($email)) || empty(trim($age)) || empty(trim($password)) || empty(trim($confirmPassword)) || empty(trim($role))) {
    $errors['all'] = "All fields are required.";
}

// if ($password !== $confirmPassword) {
//     $errors[] = "Passwords do not match.";
// }

if (Validator::confirmPassword($password, $confirmPassword)) {
    $errors['passMismatch'] = "Passwords do not match.";
}

if (Validator::names($firstName)) {
    $errors['fName'] = "First name should be under 30 characters.";
}

if (Validator::names($lastName)) {
    $errors['lName'] = "Last name should be under 30 characters.";
}

// if admin code insn't test
if ($_POST['adminCode'] !== "test") {
    $errors['admin'] = "Admin code is incorrect.";
}

// if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
//     $errors[] = "First name should not contain special characters.";
// }

// if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
//     $errors[] = "Last name should not contain special characters.";
// }

// if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
//     $errors[] = "Username should not contain special characters.";
// }

// if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
//     $errors[] = "Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
// }

if (Core\Validator::age($age)) {
    $errors['age'] = "Age should be over 14 and under 130.";
}

if (count($errors) === 0) {

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $db = App::resolve(Database::class);
    $insertQuery = "INSERT INTO staff (first_name, last_name, email, username, age, role, password) VALUES (:firstName, :lastName, :email, :username, :age, :role, :hashedPassword)";
    $params = [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'username' => $userName,
        'age' => $age,
        'role' => $role,
        'hashedPassword' => $hashedPassword
    ];

    $result = $db->query($insertQuery, $params);

    // Redirect to a success page or wherever you want the user to go after signup
    header("Location: /staff/login?success=1");
    exit();
}

// If there are errors, redirect back to the signup page
header("Location: /staff/signup?errors=" . urlencode(serialize($errors)));
exit();
