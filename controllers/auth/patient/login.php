<?php

// show page if get request

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    view('auth/view.user.login');
    exit();
}

// process login if post request

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $config = require base_path('config.php');
    
    $db = new Core\Database($config['database']);


    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "medicaldb";

    // Create a connection to the database
    $connection = new mysqli($host, $dbUsername, $dbPassword, $database);


    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }



    // Prepare a SQL query to retrieve the user's data based on the provided username
    $query = "SELECT id, email, first_name, last_name, password, role FROM patients WHERE email = ? LIMIT 1";

    // Use prepared statements to prevent SQL injection
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $email);
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
            $_SESSION['username'] = $user['first_name'] . " " . $user['last_name'];
            $_SESSION['role'] = $user['role'];

            // Redirect to the secure area after successful login
            header("Location: /Views/patient/view.patient.dashboard.php");
            exit();
        } else {
            // Incorrect password, redirect back to the login page with an error message
            header("Location: /login?error=incorrectpassword");
            exit();
        }
    } else {
        // User not found, redirect back to the login page with an error message
        header("Location: /login?error=usernotfound");
        exit();
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
}
