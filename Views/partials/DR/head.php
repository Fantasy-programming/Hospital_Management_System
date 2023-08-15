<?php
session_start();

use Core\Response;

if (!isset($_SESSION['user_id'])) {
    view(Response::FORBIDDEN);
    exit();
}

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

    <!-- js files -->
    <script src="/assets/modules/fullcalendar/dist/index.global.min.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
</head>

<body id="body-pd" class="bg-lig">