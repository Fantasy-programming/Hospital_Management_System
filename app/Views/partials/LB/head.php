<?php

use Core\Response;

session_start();

if (!isset($_SESSION['user_id'])) {
    view(Response::FORBIDDEN);
    exit();
}

// check for authorization
authorized($_SESSION['role'] === 'Laboratorist' and isset($_SESSION['user_id']));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/index.css">
    <link rel="stylesheet" href="/assets/css/lab.css">

</head>

<body id="body-pd" class="bg-lig">
