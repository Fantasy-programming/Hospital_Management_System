<?php

/// Requests

$router->get("/staff/requests", 'Controllers\Requests', 'fetch');


/// Events - AppointmentDB - Json
$router->get('/doctor/events', 'Controllers\doctor\Appointment', 'showAppointments');
$router->post('/doctor/events', 'Controllers\doctor\Appointment', 'storeAppointment');
$router->delete('/doctor/events', 'Controllers\doctor\Appointment', 'destroyAppointment');
$router->put('/doctor/events', 'Controllers\doctor\Appointment', 'updateAppointment');

// Results
$router->post('/doctor/result', 'Controllers\doctor\Results', 'filter');


/// Medicines

$router->get('/pharmacist/medicinesstore', 'Controllers\pharma\Medicines', 'show');
$router->post('/pharmacist/medicinesstore', 'Controllers\pharma\Medicines', 'fetch');
