<?php

// Dashboard
$router->get('/lab/dashboard', 'lab\Laboratory', 'viewHome');
$router->get('/lab/records', 'lab\Laboratory', 'viewRecords');
$router->get('/lab/records/{id}', 'lab\Laboratory', 'viewRecord');

$router->get('/lab/requests', 'lab\Laboratory', 'viewRequests');
$router->get('/lab/patients', 'lab\Laboratory', 'viewPatients');
$router->get('/lab/patients/{id}', 'lab\Laboratory', 'viewPatient');
$router->post('/lab/patients/{id}', 'lab\Reports', 'store');


$router->get('/lab/settings', 'lab\Laboratory', 'viewSettings');

// Reports

$router->get('/lab/reports/dr', 'lab\Laboratory', 'fetchReport');
$router->get('/lab/reports', 'lab\Laboratory', 'fetchAllReports');
