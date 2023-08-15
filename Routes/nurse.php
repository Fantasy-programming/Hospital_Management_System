<?php

// Dashboard
$router->get('/nurse/dashboard', 'controllers/nurse/index.php');
$router->get('/nurse/records', 'controllers/nurse/records.php');
$router->get('/nurse/requests', 'controllers/nurse/requests.php');
$router->get('/nurse/spaces', 'controllers/nurse/spaces.php');
$router->get('/nurse/settings', 'controllers/nurse/settings.php');
