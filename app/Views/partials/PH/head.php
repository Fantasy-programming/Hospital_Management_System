<?php

use Core\Response;

session_start();

if (!isset($_SESSION['user_id'])) {
    view(Response::FORBIDDEN);
    exit();
}

// check for authorization
authorized($_SESSION['role'] === 'Pharmacist' and isset($_SESSION['user_id']));
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
    <link rel="stylesheet" href="/assets/css/pharma.css">
    

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="/assets/modules/fontawesome6.1.1/css/all.css">

    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="/assets/modules/boxicons/css/boxicons.min.css">

    <!-- datatables CSS-->
    <link rel="stylesheet" href="/assets/modules/DataTables/datatables.min.css">

    <!-- js files -->
    <!-- <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet"> -->
</head>

<body id="body-pd" class="bg-lig">