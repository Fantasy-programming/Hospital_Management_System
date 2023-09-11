<?php

/// Requests

$router->get("/staff/requests", 'Requests', 'fetch');
$router->get("/requests/{body}/{type}", 'Requests', 'fetchStuff');
$router->get("/requests/{body}", 'Requests', 'fetchRequests');
$router->post("/requests/{id}", 'Requests', 'updateRequests');
$router->post("/requests", 'Requests', 'store');


/// Events - AppointmentDB - Json
$router->get('/doctor/events', 'doctor\Appointment', 'showAppointments');
$router->post('/doctor/events', 'doctor\Appointment', 'storeAppointment');
$router->delete('/doctor/events', 'doctor\Appointment', 'destroyAppointment');
$router->post('/doctor/events/{id}', 'doctor\Appointment', 'confirmAppointment');
$router->delete('/doctor/events/{id}', 'doctor\Appointment', 'cancelAppointment');
$router->put('/doctor/events', 'doctor\Appointment', 'updateAppointment');
$router->get('/events/{role}/{time}/{status}', 'doctor\Appointment', 'fetchAppointment');


// beds - wards

$router->get('/space/{type}/{number}', 'nurse\Space', 'fetch');
$router->post('/space/{type}/{number}', 'nurse\Space', 'store');
$router->delete('/space/{type}/{number}', 'nurse\Space', 'destroy');
$router->put('/space/{type}/{number}', 'nurse\Space', 'update');



// Results
$router->post('/doctor/result', 'doctor\Results', 'filter');


/// Medicines

$router->get('/pharmacist/medicinesstore', 'pharma\Medicines', 'show');
$router->post('/pharmacist/medicinesstore', 'pharma\Medicines', 'fetch');
