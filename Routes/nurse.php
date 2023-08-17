<?php

// Dashboard
$router->get('/nurse/dashboard', 'Controllers\nurse\Nurse', 'viewHome');
$router->get('/nurse/records', 'Controllers\nurse\Nurse', 'viewRecords');
$router->get('/nurse/requests', 'Controllers\nurse\Nurse', 'viewRequests');
$router->get('/nurse/spaces', 'Controllers\nurse\Nurse', 'viewSpaces');
$router->get('/nurse/settings', 'Controllers\nurse\Nurse', 'viewSettings');
