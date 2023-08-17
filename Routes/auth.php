<?php

/// Users
$router->get('/login', 'Controllers\auth\Login', 'showUserLogin');
$router->post('/login', 'Controllers\auth\Login', 'userLogin');

$router->get('/signup', 'Controllers\auth\Signup', 'showUserSignup');
$router->post('/signup', 'Controllers\auth\Signup', 'userStore');

/// Staff
$router->get('/staff/login', 'Controllers\auth\Login', 'showStaffLogin');
$router->post('/staff/login', 'Controllers\auth\Login', 'staffLogin');


$router->get('/staff/signup', 'Controllers\auth\Signup', 'showStaffSignup');
$router->post('/staff/signup', 'Controllers\auth\Signup', 'staffStore');

$router->post('/staff', 'Controllers\auth\Mutate', 'updateStaff');

/// Admin
$router->get('/admin', 'Controllers\auth\Login', 'showAdminLogin');
$router->post('/admin', 'Controllers\auth\Login', 'adminLogin');

/// Logout
$router->get('/logout', 'Controllers\auth\Logout', 'logout');
