<?php

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