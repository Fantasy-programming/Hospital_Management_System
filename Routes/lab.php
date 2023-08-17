<?php

// Dashboard
$router->get('/lab/dashboard', 'Controllers\lab\Laboratory', 'viewHome');
$router->get('/lab/reports', 'Controllers\lab\Laboratory', 'viewReports');
$router->get('/lab/requests', 'Controllers\lab\Laboratory', 'viewRequests');
$router->get('/lab/diagnostics', 'Controllers\lab\Laboratory', 'viewDiagnostic');
$router->get('/lab/settings', 'Controllers\lab\Laboratory', 'viewSettings');
