<?php

// Home route
$router->get('/', 'controllers/index.php');

// data fetching routes
require base_path('Routes/endpoint.php');

// Auth routes
require base_path('Routes/auth.php');

// Doctor routes
require base_path('Routes/doctor.php');

// Patient routes
require base_path('Routes/patient.php');

// Pharmacist routes
require base_path('Routes/pharma.php');

// nurse routes
require base_path('Routes/nurse.php');

// lab routes
require base_path('Routes/lab.php');

// Accountant routes
require base_path('Routes/accountant.php');

// Admin routes
require base_path('Routes/admin.php');
