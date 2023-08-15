<?php

// Dashboard
$router->get('/pharmacist/dashboard', 'controllers/pharma/index.php');
$router->get('/pharmacist/requests', 'controllers/pharma/requests.php');

$router->get('/pharmacist/medicines', 'controllers/pharma/medicines.php');
$router->put('/pharmacist/medicines', 'controllers/pharma/update.php');
$router->post('/pharmacist/medicines', 'controllers/pharma/store.php');
$router->delete('/pharmacist/medicines', 'controllers/pharma/destroy.php');

$router->get('/pharmacist/prescriptions', 'controllers/pharma/prescriptions.php');
$router->get('/pharmacist/settings', 'controllers/pharma/settings.php');
