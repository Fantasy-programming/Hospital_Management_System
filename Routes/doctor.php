<?php

// Dashboard
$router->get('/doctor/dashboard', 'Controllers\doctor\Doctor', 'viewHome');
$router->get('/doctor/appointments', 'Controllers\doctor\Doctor', 'viewAppointments');
$router->get('/doctor/patients', 'Controllers\doctor\Doctor', 'viewPatients');
$router->get('/doctor/requests', 'Controllers\doctor\Doctor', 'viewRequests');
$router->get('/doctor/results', 'Controllers\doctor\Doctor', 'viewResults');
$router->get('/doctor/settings', 'Controllers\doctor\Doctor', 'viewSettings');
