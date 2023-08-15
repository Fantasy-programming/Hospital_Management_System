<?php
session_start();

// check for authorization
authorized($_SESSION['role'] === 'Doctor' and isset($_SESSION['user_id']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/vanilla-calendar.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/themes/light.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/themes/dark.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/assets/index.css">
    <link rel="stylesheet" href="/assets/css/dash.css">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="/assets/modules/fontawesome6.1.1/css/all.css">
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="/assets/modules/boxicons/css/boxicons.min.css">

    <!-- js files -->

    <script src="/assets/modules/fullcalendar/dist/index.global.min.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">



</head>

<body id="body-pd" class="bg-lig">