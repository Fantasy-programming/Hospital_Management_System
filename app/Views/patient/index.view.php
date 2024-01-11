<?php
session_start();

<!DOCTYPE html>
<html>

<head>
    <title>Secure Area</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <h2>Your role is <?php echo $_SESSION['role']; ?></h2>
    <p>This is a secure area.</p>
    <p><a href="/logout">Logout</a></p>
</body>

</html>
