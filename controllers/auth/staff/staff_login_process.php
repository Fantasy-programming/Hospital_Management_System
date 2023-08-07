<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
// Start a session to manage user login status
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['userName'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "medicaldb";

    // Create a connection to the database
    $connection = new mysqli($host, $dbUsername, $dbPassword, $database);


    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }


    // Prepare a SQL query to retrieve the user's data based on the provided username and role
    $query = "SELECT id, username, password, role FROM staff WHERE username = ? AND role = ? LIMIT 1";

    // Use prepared statements to prevent SQL injection
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ss', $username, $role);
    $stmt->execute();
    $result = $stmt->get_result();


    // Check if a user with the given username exists in the database
    if ($result->num_rows === 1) {
        // Fetch the user's data from the result set
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, user is authenticated
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect to the user's area depending on their role

            if ($user['role'] === 'Doctor') {
                header("Location: ../Views/doctor/dashboard.php");
                exit();
            } else if ($user['role'] === 'Nurse') {
                header("Location: ../Views/nurse/dashboard.php");
                exit();
            } else if ($user['role'] === 'Accountant') {
                header("Location: ../Views/accountant/dashboard.php");
                exit();
            } else if ($user['role'] === 'Pharmacist') {
                header("Location: ../Views/pharmacist/dashboard.php");
                exit();
            } else if ($user['role'] === 'Laboratorist') {
                header("Location: ../Views/laboratorist/dashboard.php");
                exit();
            } else {
                // Unknown role, redirect back to the login page with an error message
                header("Location: staff_login.php?error=unknownrole");
                exit();
            }
        } else {
            // Incorrect password, redirect back to the login page with an error message
            header("Location: staff_login.php?error=incorrectpassword");
            exit();
        }
    } else {
        // User not found, redirect back to the login page with an error message
        header("Location: staff_login.php?error=usernotfound");
        exit();
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
}
