<?php

use Core\Response;

session_start();

if (!isset($_SESSION['user_id'])) {
    view(Response::FORBIDDEN);
    exit();
}

// check for authorization
authorized($_SESSION['role'] === 'Accountant' and isset($_SESSION['user_id']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
    <?php globalcss() ?>
    <?php loadcss('acct') ?>
    <?php loadjs('sort') ?>
    <?php loadjs('dash') ?>
    <?= urlIs('/doctor/appointments') ? loadjs('calendar') : "" ?>

</head>

<body id="body-pd" class="bg-lig">