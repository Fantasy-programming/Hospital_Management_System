<?php

// Dashboard
$router->get('/nurse/dashboard', 'nurse\Nurse', 'viewHome');
$router->get('/nurse/records', 'nurse\Nurse', 'viewRecords');
$router->get('/nurse/records/{id}', 'nurse\Nurse', 'viewPatient');
$router->post('/nurse/records/{id}', 'nurse\Nurse', 'createPatient');
$router->get('/nurse/requests', 'nurse\Nurse', 'viewRequests');
$router->get('/nurse/spaces', 'nurse\Nurse', 'viewSpaces');
$router->get('/nurse/settings', 'nurse\Nurse', 'viewSettings');
