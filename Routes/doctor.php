<?php

// Dashboard
$router->get('/doctor/dashboard', 'controllers/doctor/index.php');
$router->get('/doctor/appointments', 'controllers/doctor/appointments/index.php');
$router->get('/doctor/patients', 'controllers/doctor/patients.php');
$router->get('/doctor/requests', 'controllers/doctor/requests.php');

$router->get('/doctor/results', 'controllers/doctor/results/index.php');
$router->post('/doctor/result', 'controllers/doctor/results/show.php');

$router->get('/doctor/settings', 'controllers/doctor/settings.php');
