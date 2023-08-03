<?php
session_start();

// Check if the user is authenticated, if not, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../Users/user_login.php");
    exit();
}

// Check if the user's role is patient, if not, redirect to the home screen
if ($_SESSION['role'] !== 'patient') {
    header("Location: ../../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Secure Area</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <h2>Your role is <?php echo $_SESSION['role']; ?></h2>
    <p>This is a secure area.</p>
    <p><a href="../../utilities/logout.php">Logout</a></p>
</body>

</html>