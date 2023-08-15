<?php
session_start();

// check for authorization
authorized($_SESSION['role'] === 'admin' and isset($_SESSION['user_id']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Admin dashboard</h1>
    <h2>Your role is <?php echo $_SESSION['role']; ?></h2>
    <p>This is a secure area.</p>
    <p><a href="/logout">Logout</a></p>


</body>

</html>