<?php

// Dashboard
$router->get('/lab/dashboard', 'controllers/lab/index.php');
$router->get('/lab/reports', 'controllers/lab/reports.php');
$router->get('/lab/requests', 'controllers/lab/requests.php');
$router->get('/lab/diagnostics', 'controllers/lab/diagnostics.php');
$router->get('/lab/settings', 'controllers/lab/settings.php');
