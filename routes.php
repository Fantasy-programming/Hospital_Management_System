<?php

// Home route

$router->get('/', 'controllers/index.php');

// Auth routes

/// Users
$router->get('/login', 'controllers/auth/patient/login.php');
$router->post('/login', 'controllers/auth/patient/auth.php');
$router->get('/signup', 'controllers/auth/patient/signup.php');
$router->post('/signup', 'controllers/auth/patient/store.php');

/// Staff
$router->get('/staff/login', 'controllers/auth/staff/login.php');
$router->post('/staff/login', 'controllers/auth/staff/auth.php');
$router->get('/staff/signup', 'controllers/auth/staff/signup.php');
$router->post('/staff/signup', 'controllers/auth/staff/store.php');

/// Admin
$router->get('/admin', 'controllers/auth/admin/login.php');
$router->post('/admin', 'controllers/auth/admin/auth.php');

/// Logout
$router->get('/logout', 'controllers/auth/logout.php');


// Doctor routes

/// Dashboard
$router->get('/doctor/dashboard', 'controllers/doctor/index.php');

/// Appointments + Events
$router->get('/doctor/appointments', 'controllers/doctor/appointments/index.php');

$router->get('/doctor/events', 'controllers/doctor/appointments/show.php');
$router->post('/doctor/events', 'controllers/doctor/appointments/store.php');
$router->delete('/doctor/events', 'controllers/doctor/appointments/destroy.php');
$router->put('/doctor/events', 'controllers/doctor/appointments/update.php');

/// Patients
$router->get('/doctor/patients', 'controllers/doctor/patients.php');

/// Requests
$router->get('/doctor/requests', 'controllers/doctor/requests.php');

/// Results
$router->get('/doctor/results', 'controllers/doctor/results/index.php');
$router->post('/doctor/result', 'controllers/doctor/results/show.php');

/// Settings
$router->get('/doctor/settings', 'controllers/doctor/settings.php');

// Patient routes

/// Dashboard
$router->get('/patient/dashboard', 'controllers/patient/index.php');


// Pharmacist routes

/// Dashboard
$router->get('/pharmacist/dashboard', 'controllers/pharma/index.php');

// nurse routes

/// Dashboard
$router->get('/nurse/dashboard', 'controllers/nurse/index.php');

// lab routes

/// Dashboard
$router->get('/lab/dashboard', 'controllers/lab/index.php');

// Accountant routes

/// Dashboard

$router->get('/accountant/dashboard', 'controllers/accountant/index.php');

// Admin routes

/// Dashboard
$router->get('/admin/dashboard', 'controllers/admin/index.php');
