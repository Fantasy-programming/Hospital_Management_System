<?php

// Dashboard
$router->get('/pharmacist/dashboard', 'Controllers\pharma\Pharmacist', 'viewHome');
$router->get('/pharmacist/requests', 'Controllers\pharma\Pharmacist', 'viewRequests');

$router->get('/pharmacist/medicines', 'Controllers\pharma\Pharmacist', 'viewMedicines');
$router->put('/pharmacist/medicines', 'Controllers\pharma\Medicines', 'update');
$router->post('/pharmacist/medicines', 'Controllers\pharma\Medicines', 'store');
$router->delete('/pharmacist/medicines', 'Controllers\pharma\Medicines', 'destroy');

$router->get('/pharmacist/prescriptions', 'Controllers\pharma\Pharmacist', 'viewPrescriptions');
$router->get('/pharmacist/settings', 'Controllers\pharma\Pharmacist', 'viewSettings');
