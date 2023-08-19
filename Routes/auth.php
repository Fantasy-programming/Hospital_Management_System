<?php

/// Users
$router->get('/login', 'auth\Login', 'showUserLogin')->only('guest');
$router->post('/login', 'auth\Login', 'userLogin');

$router->get('/signup', 'auth\Signup', 'showUserSignup')->only('guest');
$router->post('/signup', 'auth\Signup', 'userStore');

/// Staff
$router->get('/staff/login', 'auth\Login', 'showStaffLogin')->only('guest');
$router->post('/staff/login', 'auth\Login', 'staffLogin');


$router->get('/staff/signup', 'auth\Signup', 'showStaffSignup')->only('guest');
$router->post('/staff/signup', 'auth\Signup', 'staffStore');

$router->post('/staff', 'auth\Mutate', 'updateStaff');

/// Admin
$router->get('/admin', 'auth\Login', 'showAdminLogin')->only('guest');
$router->post('/admin', 'auth\Login', 'adminLogin');

/// Logout
$router->get('/logout', 'auth\Logout', 'logout');
