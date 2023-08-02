<?php
session_start();

// Check if the user is authenticated, if not, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../Users/user_login.php");
    exit();
}

// Check if the user's role is patient, if not, redirect to the home screen
if ($_SESSION['role'] !== 'Doctor') {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/vanilla-calendar.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/themes/light.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/themes/dark.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/index.css">

</head>

<body>