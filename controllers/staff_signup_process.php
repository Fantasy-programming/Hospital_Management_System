<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];


    // Perform form validation

    $errors = array();

    if (empty($firstName) || empty($lastName) || empty($userName) || empty($age) || empty($password) || empty($confirmPassword) || empty($role)) {
        $errors[] = "All fields are required.";
    }

    // if ($password !== $confirmPassword) {
    //     $errors[] = "Passwords do not match.";
    // }

    if (strlen($firstName) > 30) {
        $errors[] = "First name should be under 30 characters.";
    }

    if (strlen($lastName) > 30) {
        $errors[] = "Last name should be under 30 characters.";
    }

    if (strlen($userName) > 20) {
        $errors[] = "Username should be under 20 characters.";
    }

    // if admin code insn't test
    if ($_POST['adminCode'] !== "test") {
        $errors[] = "Admin code is incorrect.";
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

    if ($age < 14 || $age > 130) {
        $errors[] = "Age should be over 14 and under 130.";
    }

    if (count($errors) > 0) {

        // Display errors and redirect back to the signup page
        $errorString = implode("<br>", $errors);
        header("Location: staff_register.php?error=$errorString");
        exit();
    }

    // Form validation passed, proceed with signup

    // Hash the password before storing it in the database

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "medicaldb";

    $connection = new mysqli($host, $dbUsername, $dbPassword, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    
    // Insert the user data into the patient table
    $insertQuery = "INSERT INTO staff (first_name, last_name, username, age, role, password) VALUES ('$firstName', '$lastName', '$userName', $age, '$role', '$hashedPassword')";

    if ($connection->query($insertQuery) === false) {
        die("Error inserting data into table: " . $connection->error);
    }

    // Close the database connection
    $connection->close();

    // Redirect to a success page or wherever you want the user to go after signup
    header("Location: staff_login.php?success=1");
    exit();
}
