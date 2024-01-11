<?php
session_start();

use Core\Response;

authorized(isset($_SESSION['user_id']));

// check for authorization
authorized($_SESSION['role'] === 'Doctor' and isset($_SESSION['user_id']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dasboard</title>
    <?php globalcss() ?>
    <?php loadcss('dash') ?>
    <?php loadjs('dash') ?>
    <?php loadjs('calendar') ?>

</head>

<body id="body-pd" class="bg-lig">
