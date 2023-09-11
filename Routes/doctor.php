<?php

// Doctor views

$router->get('/doctor/dashboard', 'doctor\Doctor', 'viewHome');
$router->get('/doctor/appointments', 'doctor\Doctor', 'viewAppointments');

$router->get('/doctor/patients', 'doctor\Doctor', 'viewPatients');
$router->get('/doctor/patients/{id}', 'doctor\Doctor', 'viewPatient');

$router->get('/doctor/requests', 'doctor\Doctor', 'viewRequests');
$router->get('/doctor/settings', 'doctor\Doctor', 'viewSettings');
