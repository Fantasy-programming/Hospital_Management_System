<?php



$router->get('/test', 'controllers/test.php');

/// Requests

$router->post('/staff', 'controllers/staff/update.php');
$router->get("/staff/requests", 'controllers/noti.php');

/// Events - AppointmentDB - Json
$router->get('/doctor/events', 'controllers/doctor/appointments/show.php');
$router->post('/doctor/events', 'controllers/doctor/appointments/store.php');
$router->delete('/doctor/events', 'controllers/doctor/appointments/destroy.php');
$router->put('/doctor/events', 'controllers/doctor/appointments/update.php');

/// Medicines

$router->get('/pharmacist/medicinesstore', 'controllers/pharma/medicinesstore.php');
$router->post('/pharmacist/medicinesstore', 'controllers/pharma/fetch.php');
