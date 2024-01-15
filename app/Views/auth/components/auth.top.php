<?php
$error = $_GET['error'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php globalcss() ?>
    <?php loadcss('auth') ?>
</head>

<body class="<?= $bg ?>">
    <div class="container-fluid">
        <nav class="row px-4 py-4">
            <a class="col" href="/">
                <h2>Turing</h2>
                <h2>Hospital</h2>
            </a>
        </nav>
    </div>
