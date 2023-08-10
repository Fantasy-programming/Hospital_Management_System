<?php

// Basic routes

$router->get('/', 'controllers/index.php');
$router->get('/login', 'controllers/auth/patient/login.php');
$router->get('/signup', 'controllers/auth/patient/signup.php');
$router->get('/logout', 'controllers/auth/logout.php');


// Doctor routes
$router->get('/doctor/dashboard', 'controllers/doctor/index.php');

$router->get('/doctor/appointments', 'controllers/doctor/appointments/index.php');
$router->get('/doctor/events', 'controllers/doctor/appointments/show.php');
$router->post('/doctor/events', 'controllers/doctor/appointments/create.php');
$router->delete('/doctor/events', 'controllers/doctor/appointments/destroy.php');

$router->get('/doctor/patients', 'controllers/doctor/patients.php');
$router->get('/doctor/requests', 'controllers/doctor/requests.php');
$router->get('/doctor/results', 'controllers/doctor/results.php');
$router->get('/doctor/settings', 'controllers/doctor/settings.php');
